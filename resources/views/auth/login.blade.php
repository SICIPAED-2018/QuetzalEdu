<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/quetzaledu_icon.ico')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap-3.3.7/css/bootstrap-3.3.7-dist.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" />
    <title>
        QuetzalEdu | @yield('title', 'Iniciar Sesión')
    </title>
    <style type="text/css">
        body{
            background-image: url('img/background-login.png') !important;
            background-repeat: no-repeat !important;
            background-size: 100% auto !important;
        }
    </style>
</head>
<body>
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="col-md-4">                  
                </div>
                <div class="col-md-4">
                    <div class="contenedor" style="margin-top: 115px;background-color: rgba(255,255,255,.8);padding: 25px;">
                        <center>
                            <div class="col-md-offset-1 col-md-10" style="margin-bottom: 25px;">
                            <a href="{{url('/')}}"><img src="{{asset('img/logotipo_quetzaledu_blanco.png')}}" class="img-responsive"></a>
                            </div>
                            <!-- <p style="color: #113D69;">Por favor, ingrese sus credenciales para iniciar sesión.</p> -->
                        </center>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required autofocus aria-describedby="basic-addon2" placeholder="Correo electrónico" />
                                <span class="input-group-addon" id="basic-addon2"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" style="color: red;font-size: 13px;">
                                        &nbsp; {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" aria-describedby="basic-addon1"/ placeholder="Contraseña" required>
                                    <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user-circle-o"></i> </span>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">
                                        {{ __('Ingresar') }}
                                </button>
                            </div>
                            <a href="{{ route('password.request') }}">{{ __('¿Olvidaste tu contraseña?') }}</a>
                        </form>                        
                        <hr>
                        <div class="form-group">
                            <a href="{{route('facebook.login')}}" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> &nbsp;Ingresar con facebook</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">                    
                </div>
            </div>   
       </div>
    </div>
</body>
</html>