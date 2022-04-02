<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return 
            [
            'name' => 'required|unique:categories|max:255|min:6',
            'description' => 'min:6',
            'status' => 'required',
            ];
        
        
    }
    public function messages(){
       return [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'description.min' => 'Mo ta phai nhieu hon 6 ki tu',
            'status.required' => 'Yeu cau chon trang thai',

       ];
    }
}
