<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profile extends Model
{
    protected $table = 'admins';
    //public $timestamps = false; 

    public static function update_personal_info($input, $id){
    	$field = Profile::find($id);
        $field->name = $input['fullname'];
        $field->email = $input['email'];
        $field->phone = $input['phone'];
        $field->address = $input['address'];
        $field->save();
    }

    public static function update_avatar($filename, $id){
        $field = Profile::find($id);
        $field->photo = $filename;
        $field->save();
    }
    public static function update_password($password, $id){
        $field = Profile::find($id);
        $field->password = $password;
        $field->save();
    }
}
