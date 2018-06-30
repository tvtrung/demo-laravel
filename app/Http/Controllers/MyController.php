<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class MyController extends Controller
{
    public function readItems() {
        $data = student::all ();
        return view('welcome',['data'=>$data]);
    }
    public function processItem($id = null) {
	    if($id == null){
	        // Insert new student to DB
	        $data = new Student();
	        $data->name = Input::get('name');
	        $data->save ();
	        return $data;
	    }else{
	        // Delete this student from DBo
	        $data = Student::find($id)->delete();
	    }
	}
	public function ckeditor() {
		return view('ckeditor');
	}
	public function uploadPhotoCkeditor(Request $request) {
		return view('welcome', [
		'CKEditorFuncNum' => $request->CKEditorFuncNum,
		'data' => [
	        'url' => $url,
	        'message' => $message,
		    ]
		]);
	}
}
