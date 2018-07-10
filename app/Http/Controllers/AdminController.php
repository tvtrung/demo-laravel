<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\UserCdnPackage;
use App\Http\Requests\AdminEditUserRequest;
use App\Transaction_history;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    	$this->middleware('admin.level');
    }
    public function index()
    {
        return view('admin.page.dashboard.index');
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
