<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>QuetzalEdu - @yield('title', 'Default')</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
	<link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('bower_components/morris.js/morris.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('bower_components/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"> -->
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  	<link rel="stylesheet" type="text/css" href="{{asset('css/loading-bar.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			@include('admin.layouts.partials.nav')
		</header>
		<section>
			<aside>
				@include('admin.layouts.partials.aside')
			</aside>
			<div class="content-wrapper">
				<div ng-view>
        
          

      			</div>
			</div>
			@yield('contenido')
			<footer class="main-footer">
			    <div class="pull-right hidden-xs">
			      <b>Version</b> 2.0
			    </div>
			    <strong>Copyright &copy; 2018 <a href="{{url('/home')}}">QuetzalEdu</a>.</strong> &nbsp;Algunos derechos reservados
  			</footer>
		</section>
	</div>
	<script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
	<script src="{{ asset('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<!-- <script src="{{ asset('bower_components/raphael/raphael.min.js')}}"></script>
	<script src="{{ asset('bower_components/morris.js/morris.min.js')}}"></script>
	<script src="{{ asset('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
	<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
	<script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{ asset('bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
	<script src="{{ asset('bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{ asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script> -->
	<!-- <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
	<script src="{{ asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ asset('bower_components/fastclick/lib/fastclick.js')}}"></script> -->
	<script src="{{ asset('dist/js/adminlte.min.js')}}"></script>
	<!-- <script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
	<script src="{{ asset('dist/js/demo.js')}}"></script> -->
	<script src="{{ asset('js/angular.min.js') }}"></script>
	<script src="{{ asset('js/angular-route.min.js') }}"></script>
	<script src="{{ asset('js/controllers/app.js') }}"></script>
	<script src="{{ asset('js/loading-bar.js') }}"></script> 
	@yield('controller')
</body>
</html>