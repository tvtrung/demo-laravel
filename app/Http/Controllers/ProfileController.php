<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Profile;
use Validator;
use File;
use Image;
use Hash;

class ProfileController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:admin');
    }
    public function index(){
    	return view('admin.page.profile.index');
    }
    public function update_personal_info(Request $request){
    	$get_request = $request->all();
    	$rule = array(
    			'fullname' => 'bail|required',
    			'user' => 'bail|required',
    		);
    	$messages = array( 
                'fullname.required' => 'Vui lòng nhập Họ Tên',
                );
		$validator = Validator::make($get_request, $rule, $messages);
		if ($validator->fails()) {
		    foreach ($validator->messages()->getMessages() as $field_name => $messages){
		        foreach ($messages as $messages) {
		            echo $messages . "<br>";
		        }
		    }
		    die;
		}
		$idUser = Auth::user()->id;
    	$input = [
    		'fullname' => $request->get('fullname'),
    		'user' => $request->get('user'),
    		'email' => $request->get('email'),
    		'phone' => $request->get('phone'),
    		'address' => $request->get('address'),
    	];
        Profile::update_personal_info($input, $idUser);
    }
    public function update_avatar(Request $request){
        $idUser = Auth::user()->id;
        $dir = 'uploads/admin/';
        if($request->hasFile('avatar')){
            File::delete(public_path($dir . Auth::user()->photo));
            $file = $request->file('avatar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            if (!File::exists($dir)) {
                File::makeDirectory($dir, $mode = 0777, true, true);
            }
            $path = $dir . $filename;
            Image::make($file)->save(($path));
            Profile::update_avatar($filename, $idUser);
            echo "/uploads/admin/" . $filename;
        }
    }
    public function update_password(Request $request){
        $get_request = $request->all();
        $rule = array(
                'current_password' => 'bail|required',
                'new_password' => 'bail|required',
                're_new_password' => 'bail|same:new_password',
            );
        $messages = array( 
                'current_password.required' => 'Bạn chưa nhập Mật khẩu',
                'new_password.required' => 'Bạn chưa nhập Mật khẩu mới',
                're_new_password.same' => 'Mật khẩu nhập lại không đúng',
                );
        $validator = Validator::make($get_request, $rule, $messages);
        if ($validator->fails()) {
            foreach ($validator->messages()->getMessages() as $field_name => $messages){
                foreach ($messages as $messages) {
                    echo "<p class='error-text-popup'>" . $messages . "<br></p>";
                }
            }
            die;
        }
        $idUser = Auth::user()->id;
        $user_password = Auth::user()->password;
        $check_user_password = $request->get('current_password');
        $new_password = $request->get('new_password');
        $hash_new_password = bcrypt($new_password);
        if (Hash::check($check_user_password, $user_password)){
            Profile::update_password($hash_new_password, $idUser);
            echo "Cập nhật mật khẩu thành công";
        }else{
            echo "<p class='error-text-popup'>Mật khẩu cũ không đúng</p>";
            die;
        }

    }
}
