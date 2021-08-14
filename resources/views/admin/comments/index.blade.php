@extends('layouts.admin')
@section('content')
	<div class="container">
        @include('partial.admin.session')
        <table class="table-auto">
            <thead>
                <tr class="text-xs font-thin text-center text-white rounded-md bg-gray-500 w-full">
                    <th>شناسه</th>
                    <th>توضیحات</th>
                    <th>مطلب</th>
                    <th>تاریخ ایجاد</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody class="container">
                @foreach ($comments as $comment)
                    <tr class="px-4 hover:text-blue-600 cursor-pointer transition-colors duration-500 ease-in-out">
                        <td class="text-xs text-center">{{$comment->id}}</td>  
                        <td class="text-xs text-center">{{$comment->description}}</td>  
                        <td class="text-xs text-center">{{ Str::of($comment->post->title)->limit(20)}}</td>
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        @if ($comment->status == 0)
                            <td class="text-xs text-center text-red-600 ">منتشر نشده</td>
                        @else
                            <td class="text-xs text-center text-green-600 ">منتشر شده</td>
                        @endif  
                        <td class="">
                            <a href="{{ route( 'comment.edit', $comment->id ) }}" class="text-xs text-yellow-600 mx-1">Edit</a>
                            <form action="{{ route('comment.destroy', $comment->id) }}"  method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"  class="text-xs text-red-600 mx-1">Delete</button>
                            </form>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex items-center justify-center my-4">
            {{$comments->links('partial.pagination.custom')}}
        </div>
    </div>
@endsection