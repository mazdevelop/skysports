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
@if (Session::has('delete_post'))
    <div class="grid place-content-center h-16">
        <div class="text-center text-red-500">
            {{session('delete_post')}}
        </div>
    </div>
@endif
@if (Session::has('delete_category'))
    <div class="grid place-content-center h-16">
        <div class="text-center text-red-500">
            {{session('delete_category')}}
        </div>
    </div>
@endif
@if (Session::has('add_post'))
    <div class="grid place-content-center h-14">
        <div class="text-center text-green-500">
            {{session('add_post')}}
        </div>
    </div>
@endif
@if (Session::has('update_post'))
    <div class="grid place-content-center h-14">
        <div class="text-center text-green-500">
            {{session('update_post')}}
        </div>
    </div>
@endif
@if (Session::has('add_category'))
    <div class="grid place-content-center h-14">
        <div class="text-center text-green-500">
            {{session('add_category')}}
        </div>
    </div>
@endif
