<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- admin css -->
    <link rel="stylesheet" href="https://api.fontgraphy.ir/css?family=iraniansans">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('css')
</head>

<body>
    @include('partial.admin.sidebar')
    <!-- MAIN CONTENT -->
    <section class="main">
        <div class="main-header">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu-alt-right'></i>
            </div>
            <div class="main-title">
                Dashboard
            </div>
        </div>
        <div class="main-content">
    @yield('content')
        </div>
    </section>
    <!-- END MAIN CONTENT -->
    <div class="overlay"></div>
    <!-- apex charts -->
    @yield('scripts')
    <!-- js script -->
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>