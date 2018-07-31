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

    <style type="text/css">
        /*body{
            background-image: url('img/background-login.png') !important;
            background-repeat: no-repeat !important;
            background-size: 100% auto !important;
        }*/
        .fondo{ 
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
          }
    </style>

</head>
<body background="{{asset('img/fondo_registro2.png')}}" class="fondo">
  <header>
  @include('index.layouts.partials.nav')
  </header>
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6" style="padding-left: 55px;padding-right: 55px;">
            <div class="registro_container" style="background-color: #eee;padding: 15px;margin-top: 55px;border-radius: 10px;padding-top: 1px;margin-bottom: 35px;padding-top: 15px;padding-bottom: 15px;padding-left: 35px;padding-right: 35px;">
              <center>
                <h3 style="font-weight: bold;">Regístrarse</h3>
              </center>
              <p class="text-center">¿Ya tienes cuenta? <a href="{{url('login')}}">Inicia Sesión</a></p>

              <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
              @csrf
              <!-- <div class="form-group col-md-6" style="padding-left: 0px !important;">
                <input type="text" name="" class="form-control" required placeholder="Apellido paterno" autofocus>
              </div>
              <div class="form-group col-md-6" style="padding-right: 0px !important;">
                <input type="text" name="" class="form-control" required placeholder="Apellido materno">
              </div>
              <div class="form-group">
                <input type="text" name="" class="form-control" placeholder="Nombre(s)" >
              </div> -->
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" name="name" class="form-control" placeholder="Nombre de usuario" value="{{ old('name') }}" autofocus="" required="">
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong style="font-size: 12px;color: red;"> &nbsp;{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                
                <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo electrónico" value="{{ old('email') }}" required="" >
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong style="font-size: 12;color: red;"> &nbsp;{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <!-- <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}"> -->
                <div class="form-group">
                <!-- <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Contraseña" required=""> -->
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required="">
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong style="font-size: 12;color: red;">&nbsp;{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required="">
              </div>

              <div class="form-group">
                <input type="checkbox" name="" style="margin-left: 5px;" checked> Acepto términos y condiciones.
              </div>

              <button class="btn btn-danger"> Cancelar</button>
              <input type="submit" name="" class="btn btn-success" style="color: #fff;" value="Registrarse">
              </form>
              <br>
              <center>
                Valoramos tu
                <a href=""> privacidad
                </a>
                como si fuera la nuestra.<br>
                Ante cualquier duda, consulta nuestros 
                <a href="">Términos de servicio.</a>
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

