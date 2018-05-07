@extends('index.layouts.main')

@section('title')

@section('contenido')
<!-- /.carousel-slide -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <div class="item active">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide1.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide2.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide3.png')}}">
              </center> 
            </div>
            <div class="item">
              <center>
                <img class="img-responsive img1" src="{{asset('img/slides/slide4.png')}}">
              </center> 
            </div>
          </div>
           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
           </a>
        </div>
<!-- carousel-slide./ -->

        <div class="container-fluid" id="cursos">
          <div class="container">
            <div class="col-lg-12" style="text-align: center;">

              <h2 style="color: #fff;font-weight: bold;">Nuestros Cursos</h2>

              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;">
                    <h2>Imagen (1)</h2>
                    <div class="panel-heading" style="background-color: #8cb441;border-radius: 0px 0px 10px 10px;">
                        <h5>Competencia Docentes</h5>
                        <a href="http://www.quetzaledu.com.mx/CursoCompetenciasDocentes" class="btn btn-default" style="background-color: #638742;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;">
                    <h2>Imagen (2)</h2>
                    <div class="panel-heading" style="background-color: #f0ca7c;border-radius: 0px 0px 10px 10px;">
                        <h5>Estrategias Docentes</h5>
                        <a href="http://www.quetzaledu.com.mx/CursoCompetenciasDocentes" class="btn btn-default" style="background-color: #ebbf65;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;">
                    <h2>Imagen (3)</h2>
                    <div class="panel-heading" style="background-color: #c9d697;border-radius: 0px 0px 10px 10px;">
                        <h5> Desarrollo y Planeación</h5>
                        <a href="http://www.quetzaledu.com.mx/CursoCompetenciasDocentes" class="btn btn-default" style="background-color: #bfcf83;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>

              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;">
                    <h2>Imagen (4)</h2>
                    <div class="panel-heading" style="background-color: #4FA9A2;border-radius: 0px 0px 10px 10px;">
                        <h5> Exámenes de Oposición</h5>
                        <a href="http://www.quetzaledu.com.mx/CursoCompetenciasDocentes" class="btn btn-default" style="background-color: #92CBD5;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="container-fluid" id="quienes-somos" style="margin-bottom: 0px;">
          <div class="container">
            <div class="col-lg-12" style="text-align: center;">
              <h2 style="color: #113D69;font-weight: bold;">¿Quiénes somos?</h2>
              <hr>

              <div class="row" style="text-align: justify;">
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>

              <div class="row" style="text-align: justify;">
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>

              <div class="row" style="text-align: justify;">
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="col-lg-6">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
              </div>

              <div class="row" style="text-align: justify;">
                <div class="col-lg-6" style="text-align: right;">
                  <img src="{{asset('img/team.png')}}">
                </div>
                <div class="col-lg-6">
                </div>
              </div>

            </div>
          </div>
        </div>


        <div class="container-fluid" id="experiencias" style="margin-top: -25px;">
          <div class="container">
            <div class="col-lg-12" style="text-align: center;">
              <h2 style="color: #4FA9A2;font-weight: bold;">Experiencias</h2>
              <br>

              <div class='black center-block relative shadow-player vimeo z-depth-2'>
                <div class="video-container video_player">
                  <iframe id="vimeo_player" src="https://player.vimeo.com/video/232551195?api=1&amp;player_id=vimeo_player" width="700" height="400" frameborder="0" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="allowfullscreen">
                  </iframe>
                </div>
              </div>

            </div>
          </div>
        </div>



        <div class="container-fluid" id="contacto" >
  <div class="container">
    <div class="col-md-12">
      <center>
        <h2 style="color: #000000;font-weight: bold;">Contáctanos</h2>
      </center>
      <br>
      <div class="col-md-6">

      <div class="form">
        <form  method="post" role="form">
          <div class="row">
            <div class="col-sm-12 form-group">
            <br>
            <p>Envíanos tus sugerencias, preguntas y comentarios ó siguenos en redes sociales, estamos para atenderte.</p>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="name" name="nombre" placeholder=" Nombre:" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="email" name="email" placeholder=" Email:" type="email" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="asunto" name="asunto" placeholder=" Asunto:" type="text" required>
            </div>
          </div>
            <textarea class="form-control" id="comments" name="mensaje" placeholder=" Mensaje:" rows="5"></textarea><br>
          <div >
            <a class="btn btn-danger" type="reset" style="background-color: #ff9800;">Cancelar</a>
            <a class="btn btn-primary" type="submit" style="background-color: #cb171e;">Enviar mensaje</a>
          </div>
        </form>
      </div>

      </div>
      
      <br>

      <div class="col-md-6">
            <iframe width="100%" height="467" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4567033302724!2d-98.69627157851757!3d20.07318688321902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7ad8d82d9b3%3A0x90fe08bec037b949!2sCalle+Reforma%2C+Apepelco%2C+Pachuquilla%2C+Hgo.!5e0!3m2!1ses!2smx!4v1479506919256" width="600" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>


    </div>
  </div>
</div>





        
        
@endsection

