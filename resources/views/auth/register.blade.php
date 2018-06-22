<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"/>
    <title>
        QuetzalEdu | @yield('title', 'Mejoremos Juntos la Educación')
    </title>

</head>
<body id="fondo_registro">
  <header>
  @include('index.layouts.partials.nav')
  </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="padding-left: 55px;padding-right: 55px;">
            <div class="registro_container" style="background-color: #eee;padding: 15px;margin-top: 35px;border-radius: 10px;padding-top: 1px;margin-bottom: 35px;">
              <center>
                <h3 style="font-weight: bold;">Regístrarse</h3>
              </center>
              <form method="POST" action="">
              <div class="form-group col-md-6" style="padding-left: 0px !important;">
                <input type="text" name="" class="form-control" required placeholder="Apellido paterno">
              </div>
              <div class="form-group col-md-6" style="padding-right: 0px !important;">
                <input type="text" name="" class="form-control" required placeholder="Apellido materno">
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Nombre(s)" >
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Nombre de Usuario">
              </div>
              <div class="form-group">
                <input type="mail" name="" class="form-control" placeholder="Correo electrónico">
              </div>
              <div class="form-group">
                <input type="password" name="" class="form-control" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="password" name="" class="form-control" placeholder="Confirmar contraseña">
              </div>
              <div class="form-group">
                <input type="checkbox" name="" style="margin-left: 5px;" checked> Acepto los términos y condiciones.
              </div>
              <button class="btn btn-danger"> Cancelar</button>
              <input type="submit" name="" class="btn btn-success" style="color: #fff;" value="Registrarse">
              </form>
              <br>
              <center>
                Valoramos tu
                <a href="http://www.it-world.com.mx/privacidad" style="color:#337ab7;text-decoration:underline;"> privacidad
                </a>
                como si fuera la nuestra.<br>
                Ante cualquier duda, consulta nuestros 
                <a href="http://www.it-world.com.mx/terminos" style="color:#337ab7;text-decoration:underline;">Términos de servicio.</a>
              </center>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </section>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.7/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/angular.min.js')}}"></script>
</body>
</html>

