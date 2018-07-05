<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MyController extends Controller
{
    public function info(){
    	echo "<pre>";
    	var_dump(Auth::user());
    }
}
