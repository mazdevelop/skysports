@extends('layouts.admin')
@section('content')
    @include('partial.form.errors')
    <div class="container my-2">
        <div class="">
            <h1 class="text-2xl flex flex-row-reverse my-4">ویرایش کاربر</h1>
            <form action="{{ route('comment.update',$comment->id) }}" method="POST"  enctype="multipart/form-data" accept-charset="UTF-8">
            @csrf
            @method('PUT')
                <div class="">
                    <label for="status" class="text-xs my-3 flex flex-row-reverse">وضعیت</label>
                    <select name="status" class="border-gray-300 text-xs  grid place-items-center rounded w-3/4" id="status">
                            <option value="1" {{$comment->status == "1" ? 'selected' : ''}} class="place-self-center">منتشر شده</option>
                            <option value="0" {{$comment->status == "0" ? 'selected' : ''}} class="place-self-center">منتشر نشده</option>
                    </select>
                </div>
                <div class="">
                    <label for="description" class="text-xs  focus:border-indigo-600  flex flex-row-reverse  ">متا توضیحات</label>
                    <textarea dir="auto" rows="8" name="description" id="description" class="w-full py-3 shadow-md border-gray-400 rounded-md my-3 focus:border-indigo-600">{{$comment->description}}</textarea>
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
    </div>
@endsection