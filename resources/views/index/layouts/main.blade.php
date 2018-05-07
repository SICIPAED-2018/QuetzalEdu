<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width,user-scalable=no"> -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
	<title>QuetzalEdu | @yield('title', 'Mejoremos Juntos la Educación')</title>
</head>
<body>
	<header>
	@include('index.layouts.partials.nav')
	</header>
    <section>
    @yield('contenido')
    </section>
    <footer>
    @include('index.layouts.partials.footer')
    </footer>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
</body>
</html>