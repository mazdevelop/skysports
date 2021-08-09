@extends('layouts.admin')
@section('content')
	<div class="container">
        @include('partial.admin.session')
        <table class="table-auto">
            <thead>
                <tr class="text-xs text-center text-white rounded-md bg-gray-500 w-full">
                    <th>شناسه</th>
                    <th>تصویر</th>
                    <th>نام کاربر</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody class="container">
                @foreach ($photos as $photo)
                    <tr class="px-4 hover:text-blue-600 cursor-pointer transition-colors duration-500 ease-in-out">
                        <td class="text-xs text-center"><div>{{$photo->id }}</div></td>
                        <td class="flex item-center justify-center">
                            <img class="w-7 h-7 rounded-full" src="{{isset( $photo->path ) ? $photo->path  : "http://placehold.it/400" }}" alt="">
                        </td>
                        <td class="text-xs text-center">{{$photo->user->name}}</td>  
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($photo->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="text-center direction-rtl">
                            <form action="{{ route('photo.destroy', $photo->id) }}"  method="POST">
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