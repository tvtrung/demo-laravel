<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CatNewsRequest extends FormRequest
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
                'slug' => 'bail|required|unique:cat_news,slug,' . $id,
                'order' => 'bail|required',
            ];
        }
        else{
            return [
                'title' => 'bail|required',
                'slug' => 'bail|required|unique:cat_news,slug',
                'order' => 'bail|required',
                'image' => 'bail|mimes:jpeg,bmp,png,jpg'
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
        ];
    }
}
