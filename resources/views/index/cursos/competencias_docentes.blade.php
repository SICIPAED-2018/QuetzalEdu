@extends('index.layouts.main')

@section('title')

@section('contenido')



<style type="text/css">
  .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus:hover{
    border-bottom: solid 1px #668633;
    -webkit-box-shadow: inset 0 -2px 0 #ffffff;
    box-shadow: inset 0 -2px 0 #ffffff;
    color: #ffffff;
    background-color: #668633;
}


.nav-tabs>li>a, .nav-tabs>li>a:focus {
    margin-right: 0;
    background-color: transparent;
    border-bottom: solid 1px #668633;
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
    border-bottom: solid 1px #668633;
    background-color: #eee;
}

</style>

  <div class="container-fluid" style="background-image: url('../img/cursos/imagen1.png');background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">

    <div class="row" style="padding: 25px;">
      <div class="col-md-6" style="background-color:#4FA9A2;border-radius: 5px;">
        <h4 style="color: #fff;">Competencias docentes</h4>
      </div>     
    </div>

    <div class="col-md-8 col-md-offset-2">

    <video width="700" controls style="width: 100%;height: auto;border: solid 1px #668633;">
              <source src="{{asset('img/videos/QTZ_Competencia_00.mp4')}}" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>

    </div>



  </div>


  <p></p>





<div class="container">
  <div class="col-md-12">
    <div class="col-md-8" style="padding-left: 60px;padding-top: 25px;">
        <ul class="nav nav-tabs" style="margin-top: -15px;">
            <li class="active"><a href="#info-tab" data-toggle="tab">Descripción del curso <i class="fa"></i></a></li>
            <li><a href="#adress-tab" data-toggle="tab">Objetivo del curso <i class="fa"></i></a></li>
            <li><a href="#profesional-tab" data-toggle="tab">Alcance del curso <i class="fa"></i></a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="info-tab">
            <h4 style="font-weight: bold;">Competencias docentes</h4>
              <h6 style="font-weight: bold;">Descripción del curso</h6>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 
          </div>
          <div class="tab-pane" id="adress-tab">
              <h4 style="font-weight: bold;">Competencias docentes</h4>
              <h6 style="font-weight: bold;">Objetivo del curso</h6>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="tab-pane" id="profesional-tab">
              <h4 style="font-weight: bold;">Competencias docentes</h4>
              <h6 style="font-weight: bold;">Alcance del curso</h6>
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
    </div>
    <div class="col-md-4" style="background-color: #283F67;border-radius: 5px;text-align: center;">
      <h4 style="color: #fff;">Adquirir este curso</h4>
      <h4 style="color: #fff;">$195.00 MXN</h4>
      <button class="btn btn-default">Comprar ahora</button>
      <p></p>
      <span class="fa fa-cc-visa fa-2x" style="color: #fff;"></span> <span class="fa fa-cc-paypal fa-2x" style="color: #fff;"></span>

      <p></p>
    </div>
  </div>
</div>






            



<br>


@endsection

