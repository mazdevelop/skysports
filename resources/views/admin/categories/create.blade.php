@extends('layouts.admin')
@section('content')
    @include('partial.admin.errors')
    <div class="container my-2">
        <div class="w-3/6 m-auto">
            <h1 class="text-2xl flex flex-row-reverse my-4">ایجاد دسته بندی</h1>
            <form action="{{ route('category.store') }}" method="POST" accept-charset="UTF-8">
            @csrf
                <div class="">
                    <label for="title" class="text-xs focus:border-indigo-600  flex flex-row-reverse  ">عنوان پست</label>
                    <input type="text" dir="auto" name="title" id="title" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="slug" class="text-xs focus:border-indigo-600  flex flex-row-reverse  ">نام مستعار</label>
                    <input type="text" dir="auto" name="slug" id="slug" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">
                </div>
                <div class="">
                    <label for="meta_description" class="text-xs  focus:border-indigo-600  flex flex-row-reverse  ">متا توضیحات</label>
                    <textarea rows="8" dir="auto" name="meta_description" id="meta_description" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600"></textarea>
                </div>
                <div class="">
                    <label for="meta_keywords" class="text-xs  focus:border-indigo-600  flex flex-row-reverse  ">متا برچسب ها</label>
                    <textarea rows="8" dir="auto"  name="meta_keywords" id="meta_keywords" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600"></textarea>
                </div>
                <div class="w-full grid place-items-center my-8">
                    <button type="submit" class="w-1/2 text-center py-2
                        bg-indigo-700 text-white  outline-none 
                        hover:bg-indigo-100 hover:text-indigo-600 transition-colors 
                        rounded-md text-sm duration-1000 ease-in-out cursor-pointer hover:shadow-md">
                        ارسال
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection