<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\AdminsManager;
use Validator;
use File;
use Image;
use Hash;

class AdminsManagerController extends Controller
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
        $list = AdminsManager::all();
        return view('admin.page.admins.index', ['data'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = array(
                'userlogin' => 'bail|required|unique:admins,user',
                'password' => 'bail|required',
                'repassword' => 'bail|same:password',
            );
        $messages = array( 
                'userlogin.required' => 'Bạn chưa nhập User Login',
                'userlogin.unique' => 'User này đã được sử dụng',
                'password.required' => 'Bạn chưa nhập Password',
                'repassword.same' => 'Password không khớp',
                );
        $this->validate($request, $rule, $messages);
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        if($request->hasFile('avatar')){
            $dir = 'uploads/admin/';
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
            $data = [
                'userlogin' => $request->get('userlogin'),
                'fullname' => $request->get('fullname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'password' => Hash::make($request->get('password')),
                'status' => $isActive,
                'avatar' => $filename,
                'level' => 0,
            ];
            AdminsManager::createAdminsWithAvatar($data);
        }else{
            $data = [
                'userlogin' => $request->get('userlogin'),
                'fullname' => $request->get('fullname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'password' => Hash::make($request->get('password')),
                'status' => $isActive,
                'avatar' => 'default.png',
                'level' => 0,
            ];
            AdminsManager::createAdminsWithoutAvatar($data);
        }
        return redirect()->route('admin.admins.index')->with('success','Thêm tài khoản admin thành công');
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
        $row = AdminsManager::find($id);
        return view('admin.page.admins.edit',['row'=>$row]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = AdminsManager::find($id);
        $rule = array(
                'password' => 'bail',
                'repassword' => 'bail|same:password',
            );
        $messages = array( 
                'repassword.same' => 'Password không khớp',
                );
        $this->validate($request, $rule, $messages);

        $get_password = $request->get('password');
        if($get_password == ''){
            $data_pass = $row->password;
        }else{
            $data_pass = Hash::make($get_password);
        }
        $isActive = $request->get('isActive');
        if($isActive == 'on') $isActive = 1; else $isActive = 0;
        if($request->hasFile('avatar')){
            $dir = 'uploads/admin/';
            if($row->photo != 'default.png'){
                File::delete(public_path($dir . $row->photo));
            }
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
            $data = [
                'fullname' => $request->get('fullname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'password' => $data_pass,
                'status' => $isActive,
                'avatar' => $filename,
                'level' => 0,
            ];
            AdminsManager::updateAdminsWithAvatar($data, $id);
        }else{
            $data = [
                'fullname' => $request->get('fullname'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'address' => $request->get('address'),
                'password' => $data_pass,
                'status' => $isActive,
                'level' => 0,
            ];
            AdminsManager::updateAdminsWithoutAvatar($data, $id);
        }
        return redirect()->route('admin.admins.edit',['id'=>$id])->with('success','Cập nhật tài khoản admin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AdminsManager::destroy($id);
        return redirect()->route('admin.admins.index')->with('success','Xóa tài khoản admin thành công');
    }
    public function view($id)
    {
        $row = AdminsManager::find($id);
        return view('admin.page.admins.view',['row'=>$row]);
    }
}
