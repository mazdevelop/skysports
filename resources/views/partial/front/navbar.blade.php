{{-- navbar --}}
<nav class="navbar">
    <div class="navbar-wrapper">
        <div class="brand-and-icon">
            <div class="brand-name">
                <h1>Varzesh<span>3</span></h1>
            </div>
            <div class="bars-icon" id="nav-icon">
                <i class='bx bx-menu-alt-right'></i>
            </div>
        </div>
        <ul class="nav-menu">
            <li><a href="#">خانه</a></li>
            <li><a href="#">آرشیو</a></li>
            <li><a href="#">دسته بندی ها</a></li>
            <li><a href="#">تماس</a></li>
        </ul>
        <ul class="social-icons">
            <li><i class='bx bxl-instagram' ></i></li>
            <li><i class='bx bx-search-alt-2' ></i></li>
            <li><i class='bx bxl-twitter' ></i></li>
            <li><i class='bx bxl-pinterest' ></i></li>
            <li><i class='bx bxl-facebook' ></i></li>
        </ul>
    </div>
</nav>
{{-- end of navbar --}}

@section('scripts')
    <script>
        $(document).ready(function (){
            // navigation toggling
            $('#nav-icon').click(function(){
                $('.nav-menu').slideToggle();
                if($('#nav-icon i').attr('class') === 'bx bx-menu-alt-right'){
                    $('#nav-icon i').removeClass('bx bx-menu-alt-right');
                    $('#nav-icon i').addClass('bx bx-x');
                }else{
                    $('#nav-icon i').removeClass('bx bx-x');
                    $('#nav-icon i').addClass('bx bx-menu-alt-right');
                }
            })
        })
    </script>
@endsection