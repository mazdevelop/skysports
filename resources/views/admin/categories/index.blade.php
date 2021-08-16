@extends('layouts.admin')
@section('content')
	<div class="container">
        @include('partial.admin.session')
        <table class="table-auto">
            <thead>
                <tr class="text-xs font-thin text-center text-white rounded-md bg-gray-500 w-full">
                    <th>عنوان</th>
                    <th>توضیحات</th>
                    <th>تاریخ ایجاد</th>
                    <th>تاریخ بروزرسانی</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody class="container">
                @foreach ($categories as $category)
                    <tr class="px-4 hover:text-blue-600 cursor-pointer transition-colors duration-500 ease-in-out">
                        <td class="text-xs text-center">{{$category->title}}</td>  
                        <td class="text-xs text-center">{{ Str::of($category->meta_description)->limit(20)}}</td>
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($category->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($category->updated_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="">
                            <div class="flex items-center justify-around rounded-md border-2 p-1 border-green-800">
                                <a href="{{ route( 'category.edit', $category->id ) }}" class="text-xs text-yellow-600 mx-1">Edit</a>
                                <form action="{{ route('category.destroy', $category->id) }}"  method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"  class="text-xs text-red-600 mx-1">Delete</button>
                                </form>
                            </div>
                        </td>  
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="flex items-center justify-center my-4">
            {{$categories->links('partial.pagination.custom')}}
        </div>
    </div>
@endsection