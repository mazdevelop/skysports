<?php

namespace App\Http\Requests;

use App\Helpers\Str;
use Illuminate\Validation\Rule;
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
        return true;
    }

    protected function prepareForValidation()
    {
        if ($this->input('slug')) {
            $this->merge(['slug'=> Str::makeSlug($this->input('slug'))]) ;
        } else {
            $this->merge(['slug'=> Str::makeSlug($this->input('title'))]) ;
        }
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
            'slug'=>Rule::unique('categories')->ignore(request()->category),
            'meta_keywords'=>'required',
            'meta_description'=>'required',
        ];
    }

    public function messages()
    {
        return [
                'title.required'=>'عنوان را وارد کنید',
                'title.min'=>'عنوان باید بیشتر از 10 کاراکتر باشد',
                'slug.unique'=>'نام مستعار قبلا ثبت شده است',
                'meta_keywords.required'=>'متا توضیحات',
                'meta_description.required'=>'متا برچسب ها',
            ];
    }
}
