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
  <!-- /.cursos -->
      <div class="container-fluid" id="cursos" style="padding-top: 55px;">
        <div class="container">
          <div class="col-lg-12" style="text-align: center;">
            <h2 style="color: #fff;font-weight: bold;">Nuestros Cursos</h2>
              <br>
            <a href="">
              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;background-color: #c9d697;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/cursos/thumb_1.png')}}" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading" style="background-color: #8cb441;border-radius: 0px 0px 10px 10px;border-top: solid 5px #fff;padding-left: 14px;">
                        <h5 style="color: #fff;">Competencias docentes</h5>
                        <a href="{{url('competencias-docentes')}}" class="btn btn-default" style="background-color: #638742;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;background-color: #f0ca7c;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/cursos/thumb_2.png')}}" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading" style="background-color: #c9d697;border-radius: 0px 0px 10px 10px;border-top: solid 5px #fff;">
                        <h5 style="color: #000;">Estrategias docentes</h5>
                        <a href="{{url('estrategias-docentes')}}" class="btn btn-default" style="background-color: #bfcf83;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;background-color: #4FA9A2;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/cursos/thumb_4.png')}}" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading" style="background-color: #f0ca7c;border-radius: 0px 0px 10px 10px;border-top: solid 5px #fff;">
                        <h5 style="color: #000;">Desarrollo y planeación</h5>
                        <a href="{{url('desarrollo-y-planeacion')}}" class="btn btn-default" style="background-color: #ebbf65;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>
            </a>
            <a href="">
              <div class="col-lg-3">
                <div class="panel panel-default" style="border-radius: 10px;background-color: #c9d697;">
                    <center>
                        <img class="img-responsive" src="{{asset('img/cursos/thumb_3.png')}}" style="border-radius: 10px 10px 0px 0px;">
                    </center>
                    <div class="panel-heading" style="background-color: #4FA9A2;border-radius: 0px 0px 10px 10px;border-top: solid 5px #fff;">
                        <h5 style="color: #000;"> Exámenes de oposición</h5>
                        <a href="{{url('examenes-de-oposicion')}}" class="btn btn-default" style="background-color: #92CBD5;color: #fff;"> Ver Curso </a>
                    </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
  <!-- cursos./ -->
  <!-- /.quiénes somos -->
      <div class="container-fluid" id="quienes-somos" style="margin-bottom: 0px;padding-top: 55px;">
        <div class="container">
          <div class="col-lg-12" style="text-align: center;">
            <h2 style="color: #113D69;font-weight: bold;">¿Quiénes somos?</h2>
            <p></p>
            <div class="row" style="text-align: justify;">
              <div class="col-lg-6">
                <center>
                   <img src="{{asset('img/SICIPAED_LOGO.png')}}" class="img-responsive">
                </center>
                <h4 style="color: #113D69;font-weight: bold;">SICIPAED</h4>
                <p>SICIPAED S. de R.L. de C.V. es una empresa de investigación y desarrollo de software desde su función en 2010. SICIPAED se encuentra en un continuo proceso de crecimiento a base de proveer a sus clientes con soluciones y servicios de Tecnologías de la Información de la más alta calidad y rentabilidad.</p>
              </div>
              <div class="col-lg-6">
                <center>
                   <img src="{{asset('img/Q_LOGO.png')}}" class="img-responsive">
                </center>
                <h4 style="color: #113D69;font-weight: bold;margin-top: -30px;">La Plataforma QuetzalEdu</h4>
                <p>Plataforma educativa para el desarrollo de competencias docentes en la educación básica y media superior, es un proyecto apoyado por el Consejo Nacional de Ciencia y Tecnología de México, CONACYT bajo la iniciativa de la empresa SICIPAED, S. de R.L. de C.V. y el apoyo de algunas Universidades Hidalguenses.</p>
              </div>
            </div>
            <div class="row" style="text-align: justify;">
              <div class="col-lg-6">
                <h4 style="color: #113D69;font-weight: bold;">Visión</h4>
                <p>Nuestra misión es establecer alianzas estratégicas con nuestros clientes para el desarrollo de sus proyectos tecnológicos. El éxito de nuestros clientes es nuestro éxito, y ayudar a mejorar su posición competitiva y hacer que ésta evolucione en el futuro es la finalidad principal de nuestro trabajo. Un dinámico y joven equipo de profesionales, con una sólida formación académica y avanzando perfil, nos permite ser el socio tecnológico fiable que cualquier empresa necesita.</p>
              </div>
              <div class="col-lg-6">
                <h4 style="color: #113D69;font-weight: bold;">A quien va dirigida la capacitación:</h4>
                <p>El proyecto está efocado para apoyar la capacitación de los docentes de nivel básico y medio superior que se encuentren frente a un grupo. Brindando alternativas de formación continua a Profesores, mediante una plataforma educativa virtual donde constantemente se están generando contenidos acordes a los cambios y mejoras de acuerdo al modelo educativo en México.</p>
              </div>
            </div>
            <div class="row" style="text-align: justify;">
              <div class="col-lg-6">
                <h4 style="color: #113D69;font-weight: bold;">Misión</h4>
                <p>Nuestra misión es expandir y mejorar nuestros servicios a todo el mundo, tomando en cuenta el impacto que tiene la tecnología y la necesidad de aportar servicios y productos de calidad para una mayor competividad.</p>
              </div>
              <div class="col-lg-6">
                <h4 style="color: #113D69;font-weight: bold;">Beneficios</h4>
                <p>Promover una práctica docente llena de experiencias intencionadas, interesantes y motivadoras para que el Profesor aprenda sobre Competencias y Estrategias Docentes y lo lleve a la práctica con sus alumnos.</p>
                <p>Apoye al proceso de evaluación docente y el profesor obtenga mejoras.</p>
                <p>El docente participante tiene la oportunidad de interactuar con colegas nivel nacional y compartir sus experiencias y conocimientos, incorporándose a una red académica multidisciplinaria.</p>
                <p>El profesor podrá realizar de forma ágil su planeación docente bajo los fundamentos de la planeación didáctica argumentada.</p>
              </div>
            </div>
            <div class="row" style="text-align: justify;">
              <div class="col-lg-6" style="text-align: right;">
                <img src="{{asset('img/team.png')}}" style="margin-top: -200px;" class="img-responsive team">
              </div>
              <div class="col-lg-6">
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- quiénes somos./ -->
  <!-- /.experiencias  -->
      <div class="container-fluid" id="experiencias" style="margin-top: -25px;padding-top: 55px;">
        <div class="container">
          <div class="col-md-8 col-md-offset-2" style="text-align: center;">
            <h2 style="color: #4FA9A2;font-weight: bold;">Experiencias</h2>
            <br>
            <video width="700" controls style="width: 100%;height: auto;">
              <source src="{{asset('img/videos/00_Intro_general_plataforma.mp4')}}" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>
          </div>
        </div>
      </div>
  <!-- experiencias./ -->
  <!-- /.contacto  -->
      <div class="container-fluid" id="contacto" style="padding-bottom: 45px;padding-top: 55px;">
        <div class="container">
          <div class="col-md-12">
            <center>
              <h2 style="color: #000000;font-weight: bold;">Contáctanos</h2>
            </center>
            <br>
            <div class="col-md-6">
              <div class="form">
                <form  method="post" action="">
                  @csrf
                  <div class="row">
                    <div class="col-sm-12 form-group">
                    <br>
                    <p style="color:#0071BC;font-size: 16px;">Envíanos tus sugerencias, preguntas y comentarios ó siguenos en redes sociales, estamos para atenderte.</p>
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
                  <textarea class="form-control" id="comments" name="mensaje" placeholder=" Mensaje:" rows="5" required ></textarea>
                  <br>
                  <div>
                    <input type="submit" name="Enviar" class="btn btn-primary" style="padding-left: 55px;padding-right: 55px;background-color: #0071BC;">
                  </div>
                </form>
              </div>
            </div>
            <br>
            <div class="col-md-6">
              <iframe width="100%" height="467" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3747.4567033302724!2d-98.69627157851757!3d20.07318688321902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1a7ad8d82d9b3%3A0x90fe08bec037b949!2sCalle+Reforma%2C+Apepelco%2C+Pachuquilla%2C+Hgo.!5e0!3m2!1ses!2smx!4v1479506919256" width="600" height="445" frameborder="0" style="border:0" allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </div>
  <!-- contacto./ -->        
@endsection

