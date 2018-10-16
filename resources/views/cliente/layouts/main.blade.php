<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7/css/bootstrap-3.3.7-dist.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/loading-bar.css')}}">
	<title>QuetzalEdu - @yield('title', 'Default')</title>
</head>
<body style="margin-top: 65px;">
		<header>
			@include('cliente.layouts.partials.nav')
		</header>
		<section>
			<div class="content-wrapper">
				<div ng-view>
	        
	          

	      		</div>
			</div>
		</section>
		<footer>
			@include('cliente.layouts.partials.footer')
		</footer>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/angular.min.js')}}"></script>
	<script src="{{ asset('js/angular-route.min.js') }}"></script>
	<script src="{{ asset('js/controllers/docente.js') }}"></script>
	<script src="{{ asset('js/loading-bar.js') }}"></script> 
	@yield('controller')
</body>
</html>