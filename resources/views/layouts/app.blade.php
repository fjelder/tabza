<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css')}}">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">-->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div id="wrapper" class="container-fluid d-flex">
        <div class="sidebar">
            <div class="header">
                <!-- header/logo -->
                <a href="{{ route('home') }}"><img src="https://webstockreview.net/images/google-png-logo.png" alt="{{ config('app.name', 'Laravel') }}"></a>
            </div>
            <!-- header -->

            <div class="menu">
                <a href="{{ route('stations.index') }}" class="active"><i class="fab fa-artstation"></i>Stacje</a>
                <a href="{{ route('lk.index') }}"><i class="fas fa-subway"></i>Linie kolejowe</a>
                <a href="{{ route('iz.index') }}"><i class="fas fa-home"></i>Zakłady linii kolejowych</a>
            </div>
            <!-- menu -->
        </div>
        <!-- sidebar -->
        <div class="page-content">
            <nav class="navbar navbar-expand-lg navbar-light" style="min-height: 62px;">
                <button id="toggleMenu" class="btn btn-outline-info">&#9776;</button>
            </nav>
            <!-- navbar -->
            <div class="breadcrumbs">Home / Content / Page</div>
            <!-- breadcrumbs -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- content -->
        </div>
        <!-- page-content -->
    </div>
    <!-- wrapper -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
