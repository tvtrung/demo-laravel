<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminsManager extends Model
{
    protected $table = "admins";
    public static function createAdminsWithAvatar($data){
    	$field = new AdminsManager();
    	$field->name = $data['fullname'];
    	$field->user = $data['userlogin'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->level = $data['level'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function createAdminsWithoutAvatar($data){
    	$field = new AdminsManager();
    	$field->name = $data['fullname'];
    	$field->user = $data['userlogin'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->level = $data['level'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function updateAdminsWithAvatar($data, $id){
    	$field = self::find($id);
    	$field->name = $data['fullname'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->level = $data['level'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function updateAdminsWithoutAvatar($data, $id){
    	$field = self::find($id);
    	$field->name = $data['fullname'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->password = $data['password'];
    	$field->level = $data['level'];
    	$field->status = $data['status'];
    	$field->save();
    }
}
