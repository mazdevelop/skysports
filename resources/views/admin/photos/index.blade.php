@extends('layouts.admin')
@section('content')
	<div class="container">
        @include('partial.admin.session')
        <table class="table-auto">
            <thead>
                <tr class="text-xs text-center text-white rounded-md bg-gray-500 w-full">
                    <th>عکس</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>نقش کاربری</th>
                    <th>وضعیت</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody class="container">
                @foreach ($users as $user)
                    <tr class="px-4 hover:text-blue-600 cursor-pointer transition-colors duration-500 ease-in-out">
                            <td class="flex item-center justify-center">
                                <img class="w-7 h-7 rounded-full" src="{{$user->photo ? $user->photo->path : "http://placehold.it/400" }}" alt="">
                            </td>
                        <td class="text-xs text-center">{{$user->name}}</td>  
                        <td class="text-xs text-center">{{$user->email}}</td>  
                        <td class="text-xs text-center">
                            <ul class="list-none">
                                @foreach ($user->roles as $role)
                                    <li>{{ $role->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="text-xs text-center @if($user->status == "فعال") text-green-400 @else text-red-400 @endif ">{{ $user->status }}</td>  
                        <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($user->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                        <td class="">
                            <a href="{{ route( 'user.edit', $user->id ) }}" class="text-xs text-yellow-600 mx-1">Edit</a>
                            <form action="{{ route('user.destroy', $user->id) }}"  method="POST">
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