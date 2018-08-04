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
	public $_table = 'configs';
	public $_info_db = array();
	public $_row = array();
	public $_data_db;
	public $_info = array(
		    		'logo','email','hotline','contact','googlemap','googleanalytics',
		    	);
	public function __construct(){
        $this->middleware('auth:admin');
        $this->middleware('admin.status'); 

        $this->_data_db = DB::table($this->_table)->get();
        foreach ($this->_data_db as $value) {
			$this->_info_db[] = $value->name;
			if(!in_array($value->name, $this->_info)){
				DB::table($this->_table)->where('name', $value->name)->delete();
			}
		}
		foreach ($this->_info as $value) {
			if(!in_array($value, $this->_info_db)){
				DB::table($this->_table)->insert(['name'=>$value,'value'=>'']);
			}
		}
		foreach ($this->_info as $value){
			$field = DB::table($this->_table)->where('name', $value)->get();
			$this->_row[$value] = $field[0]->value;
		}
    }
    public function infomation(){
    	return view('admin.page.configs.infomation',['row'=>$this->_row]);
    }
    public function basic(){
    	return view('admin.page.configs.basic',['row'=>$this->_row]);
    }
    public function update(Request $request){
    	$data = $request->all();
    	$dir = 'uploads/configs/';
    	foreach ($data as $key => $value) {
    		if($key == '_token') continue;
    		//FILE
    		if($request->hasFile($key)){
	            $file = $request->file($key);
	            $filename = time() . '.' . $file->getClientOriginalExtension();
	            if (!File::exists($dir)) {
	                File::makeDirectory($dir, $mode = 0777, true, true);
	            }
	            $path = $dir . $filename;
	            Image::make($file)->save(($path));
	            $field = DB::table($this->_table)->where('name', $key)->get();
	            $id = $field[0]->id;
	    		$row = Configs::find($id);
	    		File::delete(public_path($dir . $row->value));
	    		$row->value = $filename;
	    		$row->save();
	    		continue;
	        }
    		$field = DB::table($this->_table)->where('name', $key)->get();
    		$id = $field[0]->id;
    		$row = Configs::find($id);
    		$row->value = $value;
    		$row->save();
    	}
    }
}