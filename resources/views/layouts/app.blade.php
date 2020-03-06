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
<nav class="navbar navbar-expand-md navbar-light bg-light border-bottom">
			<a class="navbar-brand" href="{{route('home')}}">{{ config('app.name', 'Laravel') }}</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a href="{{ route('stations.index') }}" class="nav-link">Stacje<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a href="{{ route('lk.index') }}" class="nav-link">Linie kolejowe</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('iz.index') }}" class="nav-link">Zakłady linii kolejowych</a>
					</li>
					
					<li class="nav-item">
						<a href="{{ route('home')}}/phpmyadmin" target="_blank" class="nav-link">phpmyadmin</a>
					</li>

				</ul>
				<form action="" method="get" class="form-inline my-2 my-lg-0">
					<input name="search" class="form-control mr-sm-2" type="search" placeholder="{{Request::path()}}">
					<button class="btn btn-dark my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</nav>
	<div class="container-fluid">
			


		<div class="content my-5 p-1">
				@yield('content')
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js')}}"></script>
</body>

</html>