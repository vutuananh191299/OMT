<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request_register extends FormRequest
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
    public function rules()
    {
        return [
            'email' => 'required|email|max:255|unique:users,email,' .$this->id, //unique : users//table,username//cột
            'password'=> 'required|max:255|min:8',
            'confirm_password'=> 'same:password',
        ];
    }

    public function messages() {
        return [
            'email.unique'=> 'Tài khoản đã có người sử dụng',
            'email.required'=> 'Không được để trống!',
            'password.required'=> 'Không được để trống!',
            'password.min'=> 'Mật Khẩu > 8 kí tự',
            'confirm_password.required'=> 'Không được để trống!',
            'same'=> 'Mật khẩu không trùng khớp',
            'email.email'=> 'Yêu cầu nhập đúng định dạng @',
        ];
    }
}
