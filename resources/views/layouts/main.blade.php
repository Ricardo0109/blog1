<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>@yield('title', 'Default')</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css')}}"/> 
		<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js')}}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Custom styles for this template -->
   		 <link href="/css/album.css" rel="stylesheet">
	</head>

	<body>
		
		@include('layouts/_header')
		<div class="container">
			<div class ="row">
				<div class="col-md-9" role="main">
					@include('flash::message')
					@yield('content')
				</div>
				<div  class="col-md-3" role="complementary">
					@include('layouts/_sidebar')
				</div>
			</div>
		 </div>
		 @include('layouts/_footer')
	</body>
</html>
