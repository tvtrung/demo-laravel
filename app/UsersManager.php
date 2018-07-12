<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersManager extends Model
{
    protected $table = "users";
    public static function createUsersWithAvatar($data){
    	$field = new UsersManager();
    	$field->fullname = $data['fullname'];
    	$field->name = $data['userlogin'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function createUsersWithoutAvatar($data){
    	$field = new UsersManager();
    	$field->fullname = $data['fullname'];
    	$field->name = $data['userlogin'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function updateUsersWithAvatar($data, $id){
    	$field = self::find($id);
    	$field->fullname = $data['fullname'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->photo = $data['avatar'];
    	$field->password = $data['password'];
    	$field->status = $data['status'];
    	$field->save();
    }
    public static function updateUsersWithoutAvatar($data, $id){
    	$field = self::find($id);
    	$field->fullname = $data['fullname'];
    	$field->email = $data['email'];
    	$field->phone = $data['phone'];
    	$field->address = $data['address'];
    	$field->password = $data['password'];
    	$field->status = $data['status'];
    	$field->save();
    }
}
