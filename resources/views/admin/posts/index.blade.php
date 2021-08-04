@extends('layouts.admin')
@section('content')
	<div class="container">
        <table class="table-auto">
            <thead>
                <tr class="text-xs font-thin text-center text-white rounded-md bg-gray-500 w-full">
                    <th>عکس</th>
                    <th>عنوان</th>
                    <th>کاربر</th>
                    <th>توضیحات</th>
                    <th>دسته بندی</th>
                    <th>وضعیت</th>
                    <th>تاریخ ایجاد</th>
                    <th>تاریخ بروزرسانی</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody class="container">
                @foreach ($posts as $post)
                    <tr class="px-4 hover:text-blue-600 cursor-pointer transition-colors duration-500 ease-in-out">
                            <td >
                                <img class="w-7 h-7 rounded-full" src="{{$post->photo ? $post->photo->path : "http://placehold.it/400" }}" alt="">
                            </td>
                        <td class="text-xs text-center">{{$post->title}}</td>  
                        <td class="text-xs text-center">{{$post->user->name}}</td>  
                        <td class="text-xs text-center">{{ Str::of($post->meta_description)->limit(20)}}</td>
                        <td class="text-xs text-center">{{$post->category->title}}</td>
                        <td class="text-xs text-center @if($post->status == "1") text-green-400 @else text-red-400 @endif ">
                            {{ ($post->status == "1")? 'فعال' : 'غیر فعال' }}
                        </td>  
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($post->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($post->updated_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="">
                            <a href="{{ route( 'post.edit', $post->id ) }}" class="text-xs text-yellow-600 mx-1">Edit</a>
                            <form action="{{ route('post.destroy', $post->id) }}"  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="text-xs text-red-600 mx-1">Delete</button>
                            </form>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection