@extends('admin.layouts.main')
@section('ng-app')
  <html ng-app="myApp">
@endsection
@section('title','Home')

@section('contenido')
   <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      
      <div ng-view>
        
          

      </div>
    
    </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy;2017 <a href="https://adminlte.io">QuetzalEdu</a>.</strong> Algunos derechos reservados.
  </footer>
  


@endsection