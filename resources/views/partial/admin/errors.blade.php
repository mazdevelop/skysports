@if (count($errors) > 0)
    <ul class="list-none text-center rounded w-3/4 mx-auto text-xs text-red-200 bg-red-600 py-3 leading-6">
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
@endif