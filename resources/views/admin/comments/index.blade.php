@extends('layouts.admin')
@section('content')
	<div class="container">
        @include('partial.admin.session')
            <form action="{{ route('comment.delete.all') }}" method="post">
            @csrf
            @method('DELETE')
            <div class="flex justify-between items-center my-2">
                    <div class="">
                        <select name="checkBoxArray[]" class="text-xs" id="">
                            <option value="delete">حذف دسته جمعی</option>
                        </select>
                    </div>
                    <div class=""> 
                        <input type="submit" name="submit" class="p-2 text-xs cursor-pointer rounded-md bg-indigo-600 text-white hover:bg-indigo-800" value="اعمال">
                    </div>
            </div>
            <table class="table-auto">
                <thead>
                    <tr class="text-xs font-thin text-center text-white rounded-md bg-gray-500 w-full">
                        <th><input type="checkbox" name="options" id=""></th>
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
                            <td class="text-xs text-center"><input type="checkbox" name="checkBoxArray[]" value="{{$comment->id}}"></td>  
                            <td class="text-xs text-center">{{$comment->id}}</td>  
                            <td class="text-xs text-center">{{$comment->description}}</td>  
                            <td class="text-xs text-center">{{ Str::of($comment->post->title)->limit(20)}}</td>
                            <td class="text-xs text-center direction-rtl">{{ \Hekmatinasser\Verta\Verta::instance($comment->created_at)->formatDifference(\Hekmatinasser\Verta\Verta::today('Asia/Tehran'))}}</td>  
                            @if ($comment->status == 0)
                                <td class="text-xs text-center text-red-600 ">منتشر نشده</td>
                            @else
                                <td class="text-xs text-center text-green-600 ">منتشر شده</td>
                            @endif  
                            <td>
                                <div class="flex items-center justify-around rounded-md border-2 p-1 border-green-800">
                                    <a href="{{ route( 'comment.edit', $comment->id ) }}" class="text-xs text-yellow-600 mx-1">Edit</a>
                                    <form action="{{ route('comment.destroy', $comment->id) }}"  method="POST">
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
        </form>
        <div class="flex items-center justify-center my-4">
            {{$comments->links('partial.pagination.custom')}}
        </div>
    </div>
    
@endsection

@section('scripts')
    <script>
        let options = document.querySelector("[name='options']");
        let checkBoxArray = document.getElementsByName("checkBoxArray[]");
        options.addEventListener('click',function () {
            for (let i = 0, max = checkBoxArray.length; i < max; i++){
                if (this.checked)
                    {
                        checkBoxArray[i].checked = true;
                    }
                    else
                    {
                        checkBoxArray[i].checked = false;
                    }
            }
        })
    </script>
@endsection