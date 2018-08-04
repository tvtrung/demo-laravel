<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class NewsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(Request $request)
    {
        $id = $request->get('id');
        if($id){
            return [
                'title' => 'bail|required',
                'slug' => 'bail|required|unique:news,slug,' . $id,
                'order' => 'bail|required',
                'categories' => 'bail|required'
            ];
        }
        else{
            return [
                'title' => 'bail|required',
                'slug' => 'bail|required|unique:news,slug',
                'order' => 'bail|required',
                'image' => 'bail|mimes:jpeg,bmp,png,jpg',
                'categories' => 'bail|required'
            ];
        }
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'slug.required' => 'Bạn chưa nhập slug',
            'slug.unique' => 'Slug đã sử dụng',
            'order.required' => 'Bạn chưa nhập Thứ tự',
            'image.mimes' => 'Hình ảnh không đúng định dạng',
            'categories.required'=>'Bạn chưa chọn chủ đề'
        ];
    }
}
