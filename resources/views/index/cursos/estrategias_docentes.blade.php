@extends('index.layouts.main')

@section('title')

@section('contenido')
<style type="text/css">
.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus:hover{
    border-bottom: solid 1px #c9d697;
    -webkit-box-shadow: inset 0 -2px 0 #ffffff;
    box-shadow: inset 0 -2px 0 #ffffff;
    color: #ffffff;
    background-color: #c9d697;
}
.nav-tabs>li>a, .nav-tabs>li>a:focus {
    margin-right: 0;
    background-color: transparent;
    border-bottom: solid 1px #c9d697;
    color: #666666;
    -webkit-box-shadow: inset 0 -2px 0 #ffffff;
    box-shadow: inset 0 -2px 0 #ffffff;
    
    -webkit-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
}
.nav-tabs>li>a:hover, .nav-tabs>li>a:focus:hover {
    /* background-color: transparent; */
    /* -webkit-box-shadow: inset 0 -2px 0 #2196f3; */
    -webkit-box-shadow: inset 0 -2px 0 #ffffff;
    box-shadow: inset 0 -2px 0 #ffffff;
    color: #2196f3;
    border-bottom: solid 1px #c9d697;
    background-color: #eee;
}
</style>
  <div class="container-fluid" style="background-image: url('../img/cursos/imagen2.png');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;background-position: center;">
    <div class="row" style="padding: 25px;">
      <div class="col-md-6" style="background-color:#c9d697;border-radius: 5px;">
        <h4 style="color: #fff;">Estrategias docentes</h4>
      </div>     
    </div>
    <div class="col-md-8 col-md-offset-2">
      <video width="700" controls style="width: 100%;height: auto;border: solid 1px #c9d697;">
          <source src="{{asset('img/videos/Intro_estrategias_docentes.mp4')}}" type="video/mp4">
          Your browser does not support HTML5 video.
      </video>
    </div>
  </div>
  <p></p>
  <div class="container">
    <div class="col-md-12">
      <div class="col-md-8" style="padding-left: 60px;padding-top: 20px;">
          <ul class="nav nav-tabs" style="margin-top: -15px;">
              <li class="active"><a href="#info-tab" data-toggle="tab">Descripción del curso <i class="fa"></i></a></li>
              <li><a href="#adress-tab" data-toggle="tab">Objetivo del curso <i class="fa"></i></a></li>
              <li><a href="#profesional-tab" data-toggle="tab">Alcance del curso <i class="fa"></i></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="info-tab">
              <h4 style="font-weight: bold;">Estrategias docentes</h4>
                <h6 style="font-weight: bold;">Descripción del curso</h6>
                  <p style="text-align: justify;">Las estrategias docentes son las acciones que se llevan a cabo con el objetivo de que el estudiante construya su aprendizaje, se logren los objetivos planteados en la planeación del curso (Argudín, 2001). En otras palabras, son un conjunto de procedimientos organizados, formalizados y orientado al logro del aprendizaje.</p> 
            </div>
            <div class="tab-pane" id="adress-tab">
                <h4 style="font-weight: bold;">Estrategias docentes</h4>
                <h6 style="font-weight: bold;">Objetivo del curso</h6>
                  <p style="text-align: justify;">El docente participante, reflexiona sobre sus cualidades individuales académicas, profesional para la mejora de su práctica académica y la mejora del aprendizaje en sus estudiantes.</p>
            </div>
            <div class="tab-pane" id="profesional-tab">
                <h4 style="font-weight: bold;">Estrategias docentes</h4>
                <h6 style="font-weight: bold;">Alcance del curso</h6>
                  <p style="text-align: justify;">Promover una práctica docente llena de experiencias intencionadas, interesante y motivadora para usted y sus alumnos.</p>
            </div>
          </div>
      </div>
      <div class="col-md-4" style="background-color: #283F67;border-radius: 5px;text-align: center;">
        <h4 style="color: #fff;">Adquirir este curso</h4>
        <h4 style="color: #fff;">$195.00 MXN</h4>
        <button class="btn btn-default" style="background-color: #FBED50;font-weight: bold;box-shadow: 0 0 0 0.2rem rgba(255,215,15,.5);">Comprar ahora &nbsp;<span class="fa fa-shopping-cart fa-2x" style="color: #283F67;"></span></button>
          <p></p>
          <p style="color: #fff;"><i class="fa fa-clock-o fa-2x"></i> &nbsp; Realiza el curso a tus tiempos</p>
          <p style="color: #fff;"><i class="fa fa-user fa-2x"></i> &nbsp; Pensado para el profesor activo</p>
          <p style="color: #fff;"><i class="fa fa-share-alt fa-2x"></i> &nbsp; Manten contacto con tu instructor</p>
          <span class="fa fa-cc-visa fa-2x" style="color: #fff;"></span> <span class="fa fa-cc-paypal fa-2x" style="color: #fff;"></span>
          <p></p>
      </div>
    </div>
  </div>
  <br>
@endsection

