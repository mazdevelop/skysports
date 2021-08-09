<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    protected function prepareForValidation()
    {
        if ($this->input('slug')) {
            $this->merge(['slug'=> Str::makeSlug($this->input('slug'))]) ;
        } else {
            $this->merge(['slug'=> Str::makeSlug($this->input('title'))]) ;
        }
    }
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
            'title'=>'required|min:10',
            'slug'=>Rule::unique('posts')->ignore(request()->post),
            'description'=>'required|min:8',
            'category'=>'nullable',
            'meta_keywords'=>'required',
            'meta_description'=>'required',
            'status'=>'required',
        ];
    }

    public function messages()
    {
        return [
                'title.required'=>'عنوان را وارد کنید',
                'title.min'=>'عنوان باید بیشتر از 10 کاراکتر باشد',
                'slug.unique'=>'نام مستعار قبلا ثبت شده است',
                'description.required'=>'توضیحات را وارد کنید',
                'description.min'=>'توضیحات باید بیشتر از 8 کاراکتر باشد',
                'meta_keywords.required'=>'متا توضیحات',
                'meta_description.required'=>'متا برچسب ها',
                'status.required'=>'وضعیت پست نامشخص است',
            ];
    }
}
