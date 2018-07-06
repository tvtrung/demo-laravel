<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('admin.auth.login');
        }
    }

    public function login(Request $request)
    {
    	if (Auth::guard('admin')->attempt(['user' => $request->username, 'password' => $request->password], $request->remember)) {
    		return redirect()->intended(route('admin.dashboard'));
    	}
        Session::flash('message', "Thông tin đăng nhập không đúng");
    	return redirect()->back()->withInput($request->only('username', 'remember'));
    }
}
