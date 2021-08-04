<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'nullable|min:8',
            'status'=>'required',
            'roles'=>'required',
        ];
    }
    public function messages()
    {
        return [
                'name.required'=>'نام و نام خانوادگی  را وارد کنید',
                'email.email'=>'ایمیل معتبر نمی باشد',
                'email.required'=>'ایمیل  را وارد کنید',
                'password.required'=>'رمز عبور باید بیش از 6 کاراکتر باشد',
                'password.min'=>'رمز عبور را وارد کنید',
                'status.required'=>'وضعیت کاربر را وارد کنید',
                'roles.required'=>'نقش کاربر را انتخاب کنید',
            ];
    }
}
