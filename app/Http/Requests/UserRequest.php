<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
            //
            [
                'name' => 'required|unique:users|max:255|min:6',
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'name.required' => ' Khong duoc de trong ten',
                'name.max' => 'Ten khong duoc qua 255 ki tu',
                'name.min' => 'Ten phai nhieu hon 6 ki tu',
                'email.required' => 'Phai nhap email',
                'email.email' => 'Email phải đúng định dạng',
                'password.required' => 'Yeu cau nhap mat khau',
    
            ]
        ];
    }
}
