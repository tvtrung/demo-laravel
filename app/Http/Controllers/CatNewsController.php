<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CatNewsRequest;
use App\CatNews;
use Validator;
use File;
use Image;
use Hash;

class CatNewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('admin.status'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CatNews::orderBy('order')->get();
        $count_data = $data->count();
        $html = $this->showSubCategories($data);
        return view('admin.page.news.cat.index',['html'=>$html,'count_data'=>$count_data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_order = CatNews::max('order') + 1;
        $data = CatNews::all();
        $html_option = $this->html_option_parent($data);
        return view('admin.page.news.cat.create',['html_option'=>$html_option,'max_order'=>$max_order]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CatNewsRequest $request)
    {
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        $data = [
                'title' => $request->get('title'),
                'slug' => $request->get('slug'),
                'description' => $request->get('description'),
                'content' => $request->get('content'),
                'parent' =>$request->get('parent'),
                'status' => $isActive,
                'order' => $request->get('order'),
                'seo_title' => $request->get('seo_title'),
                'seo_keyword' => $request->get('seo_keyword'),
                'seo_description' => $request->get('seo_description'),
                ];
        if($request->hasFile('image')){
            $dir = 'uploads/news/';
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
            $data['photo'] = $filename;
        }else{
            $data['photo'] = "default.png";
        }
        CatNews::create_row($data);
        return redirect()->route('admin.news.cat.index')->with('success', 'Đã thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = CatNews::find($id);
        $data = CatNews::all();
        $html_option_edit = $this->html_option_edit($data, $row->parent, $row->id);
        return view('admin.page.news.cat.edit',['row'=>$row,'html_option_edit'=>$html_option_edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CatNewsRequest $request, $id)
    {
        $row = CatNews::find($id);
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        $data = [
                'title' => $request->get('title'),
                'slug' => $request->get('slug'),
                'description' => $request->get('description'),
                'content' => $request->get('content'),
                'parent' =>$request->get('parent'),
                'status' => $isActive,
                'order' => $request->get('order'),
                'seo_title' => $request->get('seo_title'),
                'seo_keyword' => $request->get('seo_keyword'),
                'seo_description' => $request->get('seo_description'),
                ];
        if($request->hasFile('image')){
            $dir = 'uploads/news/';
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            File::delete(public_path($dir . $row->photo));
            Image::make($file)->save(($path));
            $data['photo'] = $filename;
        }else{
            $data['photo'] = $row->photo;
        }
        CatNews::update_row($data, $id);
        return redirect()->route('admin.news.cat.edit',['id'=>$id])->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = CatNews::find($id);
        $count_sub = CatNews::where('parent',$row->id)->count();
        if($count_sub != 0)
            return redirect()->route('admin.news.cat.index')->with('fail','Lỗi xóa! Hãy xóa Danh mục con trước');
        else
            $row->delete();
            return redirect()->route('admin.news.cat.index')->with('success','Xóa thành công');
    }

    public function update_status_ajax($id){
        $row = CatNews::find($id);
        if($row->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $row->status = $status;
        $row->save();
    }
    public function update_order_ajax(Request $request, $id){
        $value = $request->get('value');
        $row = CatNews::find($id);
        $row->order = $value;
        $row->save();
    }
    public function view($id){
        $row = CatNews::find($id);
        return view('admin.page.news.cat.view',['row'=>$row]);
    }
    public function showSubCategories($categories, $parent_id = 0, $char = ''){
        $html = "";
        foreach ($categories as $key => $item)
        {
            if($item->status == 1) $checked = "checked='checked'";else $checked = "";
            if ($item->parent == $parent_id)
            {
                $html = $html . "<tr>";
                $html = $html . "<td class=\"text-center\"><input class=\"order-ajax\" type=\"number\" min=\"1\" name=\"order\" value=\"".$item->order."\" data-link=\"".route('admin.news.cat.update_order_ajax',['id'=>$item->id])."\" style=\"width: 50px;\"> </td>";
                $html = $html . "<td>". $char . $item->title ."</td>";
                $html = $html . "<td  class=\"text-center\">".$item->view."</td>";
                $html = $html . "<td class=\"text-center\"><div class=\"click-change\"><input type=\"checkbox\" data-link=\"".route('admin.news.cat.update_status_ajax',['id'=>$item->id])."\"". $checked . " data-on-text=\"<i class='fa fa-check'></i>\" data-off-text=\"<i class='fa fa-times'></i>\"></div></td>";
                $html = $html ."<td class=\"text-center\">";
                $html = $html . "<button type=\"button\" class=\"btn btn-primary click-view\" title=\"View\" data-link=\"".route('admin.news.cat.view',['id'=>$item->id])."\"><i class=\"fa fa-eye\"></i></button>";
                $html = $html . "<a href=\"" . route('admin.news.cat.edit',['id'=>$item->id]) . "\"><button type=\"button\" class=\"btn yellow-crusta\" title=\"Edit\"><i class=\"fa fa-edit\"></i></button></a>";
                $html = $html . "<button type=\"button\" class=\"btn red click-delete\" title=\"Delete\" data-link=\"".route('admin.news.cat.delete',['id'=>$item->id])."\"><i class=\"fa fa-trash\"></i></button>";
                $html = $html . "</td>";
                $html = $html . "<tr>";
                unset($categories[$key]);
                $html = $html . $this->showSubCategories($categories, $item->id, $char.'|---');
            }
        }
        return $html;
    }
    public function html_option_parent($categories, $parent_id = 0, $char = ''){
        $html = "";
        foreach ($categories as $key => $item){
            if ($item->parent == $parent_id){
                $html = $html . "<option value='" . $item->id . "'>" . $char . $item->title . "</option>";
                unset($categories[$key]);
                $html = $html . $this->html_option_parent ($categories, $item->id, $char.'|---');
            }
        }
        return $html;
    }
    public function html_option_edit($categories, $current_parent, $current_id, $parent_id = 0, $char = ''){
        $html = "";
        foreach ($categories as $key => $item){
            $status_seleted = "";
            if ($item->parent == $parent_id){
                if($item->id == $current_id) continue;
                if($item->id == $current_parent) $status_seleted = "selected='selected'";
                $html = $html . "<option value='" . $item->id . "' " . $status_seleted . ">" . $char . $item->title . "</option>";
                unset($categories[$key]);
                $html = $html . $this->html_option_edit ($categories, $current_parent, $current_id, $item->id, $char.'|---');
            }
        }
        return $html;
    }
}
