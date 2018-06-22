<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7/css/bootstrap-3.3.7-dist.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
	<title>QuetzalEdu | Inicio</title>
</head>
<body  style="background-color: #F5F7F8;">
	<header>
		@include('cliente.layouts.nav')
	</header>
	<section>
		@yield('contenido')
	</section>
	<footer>
		@include('cliente.layouts.footer')
	</footer>
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('/js/popper.min.js') }}"></script>
</body>
</html>