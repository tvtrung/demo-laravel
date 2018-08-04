<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsRequest;
use App\News;
use Validator;
use File;
use Image;
use Hash;

class NewsController extends Controller
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
    public function index(Request $request)
    {
        $item_per_page = 10;
        $current_page = $request->get('page');
        if($current_page && $current_page >= 2){
            $start_number = ($current_page - 1) * $item_per_page + 1;
        }else{
            $start_number = 1;
        }
        $data = News::orderBy('order')->paginate($item_per_page);
        $count_data = $data->count();
        return view('admin.page.news.post.index',['data'=>$data,'count_data'=>$count_data,'start_number'=>$start_number]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $count_news = News::max('order') + 1;
        $data_cat = DB::table('cat_news')->orderBy('order')->get();
        $html_option = $this->html_option_parent($data_cat);
        return view('admin.page.news.post.create',['html_option'=>$html_option,'count_news'=>$count_news]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        $data = [
                'title' => $request->get('title'),
                'slug' => $request->get('slug'),
                'description' => $request->get('description'),
                'content' => $request->get('content'),
                'id_cat' =>$request->get('categories'),
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
        News::create_row($data);
        return redirect()->route('admin.news.post.index')->with('success', 'Đã thêm thành công');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function update_order_ajax(Request $request, $id){
        $value = $request->get('value');
        $row = News::find($id);
        $row->order = $value;
        $row->save();
    }
    public function update_status_ajax($id){
        $row = News::find($id);
        if($row->status == 1){
            $status = 0;
        }else{
            $status = 1;
        }
        $row->status = $status;
        $row->save();
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
}
