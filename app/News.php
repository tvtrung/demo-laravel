<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    protected $table = "news";
    public static function create_row($data){
    	$field = new News();
    	$field->title = $data['title'];
    	$field->description = $data['description'];
        $field->content = $data['content'];
    	$field->slug = $data['slug'];
    	$field->photo = $data['photo'];
    	$field->order = $data['order'];
    	$field->status = $data['status'];
    	$field->view = 0;
    	$field->seo_title = $data['seo_title'];
    	$field->seo_keyword = $data['seo_keyword'];
    	$field->seo_description = $data['seo_description'];
    	$field->save();
    	$row_last = DB::table('news')->orderBy('id', 'desc')->first();;
        $id_last = $row_last->id;
        $cat = $data['id_cat'];
        foreach ($cat as $value) {
        	DB::table('meta_news')->insert(['id_news'=>$id_last,'id_cat_news'=>$value]);
        }
    }
    public static function update_row($data, $id){
        $field = Self::find($id);
        $field->title = $data['title'];
        $field->description = $data['description'];
        $field->content = $data['content'];
        $field->slug = $data['slug'];
        $field->photo = $data['photo'];
        $field->order = $data['order'];
        $field->status = $data['status'];
        $field->seo_title = $data['seo_title'];
        $field->seo_keyword = $data['seo_keyword'];
        $field->seo_description = $data['seo_description'];
        $field->save();
    }
}
