@if (Session::has('delete_user'))
    <div class="grid place-content-center h-16">
        <div class="text-center text-red-500">
            {{session('delete_user')}}
        </div>
    </div>
@endif
@if (Session::has('add_user'))
    <div class="grid place-content-center h-14">
        <div class="text-center text-green-500">
            {{session('add_user')}}
        </div>
    </div>
@endif