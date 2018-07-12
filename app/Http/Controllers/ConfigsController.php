<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Configs;
use Validator;
use File;
use Image;
use Hash;

class ConfigsController extends Controller
{
	public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('admin.status');
    }
    public function infomation(){
    	$info_db = array();
    	$row = array();
    	$data_db = DB::table('configs')->get();
    	$info = array(
    		'logo','email','hotline','contact'
    	);
    	foreach ($data_db as $value) {
    		$info_db[] = $value->name;
    		if(!in_array($value->name, $info)){
    			DB::table('configs')->where('name', $value->name)->delete();
    		}
    	}
    	foreach ($info as $value) {
    		if(!in_array($value, $info_db)){
    			DB::table('configs')->insert(['name'=>$value,'value'=>'']);
    		}
    	}

    	foreach ($info as $value){
    		$field = DB::table('configs')->where('name', $value)->get();
    		$row[$value] = $field[0]->value;
    	}
    	return view('admin.page.configs.infomation',['row'=>$row]);
    }
    public function update(Request $request){
    	$data = $request->all();
    	$input = array();
    	foreach ($data as $key => $value) {
    		if($key == '_token') continue;
    		$field = DB::table('configs')->where('name', $key)->get();
    		$id = $field[0]->id;
    		$row = Configs::find($id);
    		$row->value = $value;
    		$row->save();
    	}
    }
}