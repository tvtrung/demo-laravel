<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatNews extends Model
{
    protected $table = "cat_news";
    public static function create_row($data){
    	$field = new CatNews();
    	$field->title = $data['title'];
    	$field->description = $data['description'];
        $field->content = $data['content'];
    	$field->parent = $data['parent'];
    	$field->slug = $data['slug'];
    	$field->photo = $data['photo'];
    	$field->order = $data['order'];
    	$field->status = $data['status'];
    	$field->view = 0;
    	$field->seo_title = $data['seo_title'];
    	$field->seo_keyword = $data['seo_keyword'];
    	$field->seo_description = $data['seo_description'];
    	$field->ishome = 1;
    	$field->save();
    }
    public static function update_row($data, $id){
        $field = Self::find($id);
        $field->title = $data['title'];
        $field->description = $data['description'];
        $field->content = $data['content'];
        $field->parent = $data['parent'];
        $field->slug = $data['slug'];
        $field->photo = $data['photo'];
        $field->order = $data['order'];
        $field->status = $data['status'];
        $field->seo_title = $data['seo_title'];
        $field->seo_keyword = $data['seo_keyword'];
        $field->seo_description = $data['seo_description'];
        $field->ishome = 1;
        $field->save();
    }
}
