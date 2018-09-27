@extends('cliente.main')

@section('contenido')

      <div class="container-fluid" style="padding-top: 80px;">
        <div class="row">

          <div class="col-md-3">

            <div class="panel panel-default" style="background: #285675;">
                <div class="panel-body">
                  
                  <h4 class="text-center" style="color: #fff;"> &nbsp;Bienvenido(a)</h4>
                  <!-- <center><img src="{{ asset(Auth::user()->avatar)}}" alt="Avatar" class="img-circle" style="height:106px;width:106px"></center> -->
                  <center><img src="{{ asset('/img/avatar.png')}}" alt="Avatar" class="img-circle" style="height:106px;width:106px"></center>

                  <h4 class="text-center" style="color: #fff;"><i class="fa fa-circle text-success"></i> &nbsp;María Ramirez</h4>
              <hr>
              <div class="caption" style="color: #fff;">
                <ul class="list-unstyled">
                  <li><span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true" style="color: #fff;">
                   </span> &nbsp;Editar perfil</li>

                  

                  <li><i class="fa fa-circle text-success"></i> &nbsp;Online</li>



                  <li><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="color: #fff;">
                  </span> &nbsp;mramírez18@gmail.com</li>
                </ul>
              </div>
              </div>
            </div>

             <div class="panel panel-default">
               <button class="btn btn-default btn-block" type="button" data-toggle="collapse" data-target="#footwear1" aria-expanded="false" aria-controls="footwear" style="background-color: #285675; color: #FFF; text-align: left;">
                <span class="fa fa-th-large"></span>  Mis Cursos
               </button>
               <div class="collapse" id="footwear1">
                <p>Algo de texto...</p>
              </div>

              <!-- <button class="btn btn-default btn-block" type="button" data-toggle="collapse" data-target="#footwear2" aria-expanded="false" aria-controls="footwear" style="background-color: #7D97A5; color: #FFF; text-align: left;">
                <span class="fa fa-clone"></span> Mis Eventos
               </button>
               <div class="collapse" id="footwear2">
                <p>Mas texto...</p>
              </div> -->

              <!-- <button class="btn btn-default btn-block" type="button" data-toggle="collapse" data-target="#footwear3" aria-expanded="false" aria-controls="footwear" style="background-color: #7D97A5; color: #FFF; text-align: left;">
                <span class="fa fa-file-image-o"></span> Mis Fotos
               </button> -->

               <button class="btn btn-default btn-block" type="button" style="background: #285675; color: #FFF; text-align: left;">
                <span class="fa fa-clipboard"></span> Simulador de exámenes de oposición
               </button>

               <div class="collapse" id="footwear3">

                <center>
                  <table class="table" style="width:100%">
                  <tr>
                    <th> <img src="{{ asset('/img/lights.jpg') }}"  style="width:100%;"></th>
                    <th> <img src="{{ asset('/img/nature.jpg') }}"  style="width:100%;"></th> 
                  </tr>
                  <tr>
                    <th> <img src="{{ asset('/img/mountains.jpg') }}"  style="width:100%;"></th>
                    <th> <img src="{{ asset('/img/forest.jpg') }}"  style="width:100%;"></th> 
                  </tr>
                  <tr>
                    <th> <img src="{{ asset('/img/nature.jpg') }}"  style="width:100%;"></th>
                    <th> <img src="{{ asset('/img/fjords.jpg') }}"  style="width:100%;"></th> 
                  </tr>
                </table>
                </center>
               
              </div>

              <button class="btn btn-default btn-block" type="button" style="background: #285675; color: #FFF; text-align: left;">
                <span class="fa fa-file-text-o"></span> Rúbricas
               </button>

            </div>

            <div class="panel panel-default">
              <div class="panel-body" style="padding-top: 0px;">
                <h3><small> <span class="fa fa-bell"></span> Notificaciones <span class="label label-warning">0</span></small></h3>
                <!--
                <span class="label label-default" style="background-color: #303E45;">News</span>
                <span class="label label-default" style="background-color: #303E45;">W3Schools</span>
                <span class="label label-default" style="background-color: #435761;">Labels</span>
                <span class="label label-default" style="background-color: #435761;">Games</span>

                <span class="label label-default" style="background-color: #57707D;">Friends</span>
                <span class="label label-default" style="background-color: #57707D;">Games</span>
                <span class="label label-default" style="background-color: #7D97A5;">Friends</span>
                <span class="label label-default" style="background-color: #7D97A5; color: black;">Food</span>

                <span class="label label-default" style="background-color: #BECBD2; color: black;">Design</span>
                <span class="label label-default" style="background-color: #DFE5E8; color: black;">Art</span>
                <span class="label label-default" style="background-color: #F5F7F8; color: black;">Photos</span> -->
                </div>
              </div>
            
          </div>

          <div class="col-md-9">


            <!-- <div class="panel panel-default">
      <div class="panel-heading">Mis cursos</div>
      <div class="panel-body">Panel Content</div>
    </div> -->


            <!-- <div class="panel panel-default">
              <div class="panel-body" style="padding-top: 0px;">
                <h3><small>Social Media template by w3.css</small></h3>
                <div class="form-group"><input type="text" class="form-control" value="Status: Feeling Blue"></div>
                <button type="button" class="btn btn-default" style="background-color: #607D8B; color: white;">
                  <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"> </span> Post</button>
                </div>
              </div> -->

              <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-th-large"></span> Mis cursos</div>
                <div class="panel-body">

                    <div class="row">

                      
                        <div class="col-xs-8 col-md-4">
                          <div class="panel panel-default">
                          <img src="{{ asset('/img/cursos/thumb_4.png') }}"  style="width: 100%;">
                          
                          <div class="panel-heading" style="background: #f0ca7c;border-radius: 0px;text-align: center;border-top: solid 5px #fff;">
                            <h4 style="color: #fff;">Desarrollo y planeación</h4>
                            <button class="btn btn-warnig" style="background: #ebbf65;color: #fff;    box-shadow: 1px 1px 4px rgba(0,0,0,0.4);">Entrar a curso</button>
                          </div>

                          </div>
                        </div>

                      <div class="col-xs-8 col-md-4">
                        <div class="panel panel-default">
                        <img src="{{ asset('/img/cursos/thumb_3.png') }}" style="width: 100%;">
                        <div class="panel-heading" style="background: #4FA9A2;border-radius: 0px;text-align: center;border-top: solid 5px #fff;">
                            <h4 style="color: #fff;">Exámenes de oposición</h4>
                            <button class="btn btn-warnig" style="background: #92CBD5;    box-shadow: 1px 1px 4px rgba(0,0,0,0.4);color: #fff;">Continuar curso</button>
                          </div>
                        </div>
                      </div>

                    </div>

              </div><!--panel-body-->
            </div><!--panel panel-default-->



            <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-shopping-cart"></span> Adquirir más cursos</div>
                <div class="panel-body">

                    <div class="row">

                      
                        <div class="col-xs-8 col-md-4">
                          <div class="panel panel-default">
                          <img src="{{ asset('/img/cursos/thumb_2.png') }}"  style="width: 100%;">
                          
                          <div class="panel-heading" style="background: #c9d697;border-radius: 0px;text-align: center;border-top: solid 5px #fff;">
                            <h4 style="color: #fff;">Estrategias docentes</h4>

                            <div style="background-color: #285675;color: #fff;padding-top: 10px;padding-bottom: 10px;border-radius: 5px;">
                              <h4>Costo del curso</h4>
                              <h4>$499.00 MXN</h4>
                              <span class="fa fa-cc-visa" style="font-size: 24px;"></span> 
                              <span class="fa fa-cc-paypal" style="font-size: 24px;"></span>
                            </div>
                            <br>
                            <button class="btn btn-info" style="box-shadow: 1px 1px 4px rgba(0,0,0,0.4);"><i class="fa fa-paypal"></i> Comprar ahora</button>
                          </div>

                          </div>
                        </div>

                      <div class="col-xs-8 col-md-4">
                        <div class="panel panel-default">
                        <img src="{{ asset('/img/cursos/thumb_1.png') }}" style="width: 100%;">
                        <div class="panel-heading" style="background: #8cb441;border-radius: 0px;text-align: center;border-top: solid 5px #fff;">
                            <h4 style="color: #fff;">Competencias docentes</h4>

                            <div style="background-color: #285675;color: #fff;padding-top: 10px;padding-bottom: 10px;border-radius: 5px;">
                              <h4>Costo del curso</h4>
                              <h4>$399.00 MXN</h4>
                              <span class="fa fa-cc-visa" style="font-size: 24px;"></span> 
                              <span class="fa fa-cc-paypal" style="font-size: 24px;"></span>
                            </div>
                            <br>

                            <button class="btn btn-info" style="box-shadow: 1px 1px 4px rgba(0,0,0,0.4);"><i class="fa fa-paypal"></i> Comprar ahora</button>
                          </div>
                        </div>
                      </div>

                    </div>

              </div><!--panel-body-->
            </div><!--panel panel-default-->

            <!-- <div class="panel panel-default">
                <div class="panel-body">
                  <img src="{{ asset('/img/avatar5.png')}}" alt="Avatar" class="img-circle" style="width:60px"><h4 style="display: inline;"> Jane Doe </h4>
                  <hr>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                  </p>
                    <button type="button" class="btn btn-default" style="background-color: #607D8B; color: white;"><span class="glyphicon glyphicon-thumbs-up"></span> Me Gusta</button>
                    <button type="button" class="btn btn-primary" style="background-color: #607D8B; color: white;"><span class="fa fa-comment-o"></span> Comentar</button>
              </div>

            </div> -->

           
            <!-- <div class="panel panel-default">
                <div class="panel-body">
                  <img src="{{ asset('/img/avatar6.png')}}" alt="Avatar" class="img-circle" style="width:60px"><h4 style="display: inline;"> Angie Jane </h4>
                  <hr>
                  <p>
                    Have you seen this?<br>
                    <img src="{{ asset('/img/nature.jpg') }}"  style="width: 100%;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                  </p>
                    <button type="button" class="btn btn-default" style="background-color: #607D8B; color: white;"><span class="glyphicon glyphicon-thumbs-up"></span> Me Gusta</button>
                    <button type="button" class="btn btn-primary" style="background-color: #607D8B; color: white;"><span class="fa fa-comment-o"></span> Comentar</button>
              </div>
            </div> -->


          </div>

          <!-- <div class="col-md-2"">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center>
             <h5>Upcoming Events:</h5>
             <img src="{{ asset('/img/forest.jpg') }}" style="width:100%;">
             <strong>Holiday</strong>
             <p>Friday 15:00</p>
             </center>
                <button type="button" class="btn btn-default btn-block" style="background-color: #CCCCCC;">Info</button>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-2"">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center>
             <h5>Upcoming Events:</h5>
             <img class="img-thumbnail" src="{{ asset('/img/avatar6.png') }}" style="width:50%;">
             <h4>Jane Doe</h4>
             <button type="button" class="btn btn-success" style="background-color: #94CF96;"> <span class="fa fa-check"></span> </button><button type="button" class="btn btn-danger" style="background-color: #F88E86;"> <span class="fa fa-close"></span> </button>
             </center>
                
              </div>
            </div>
          </div> -->
           <!-- <div class="col-md-2"">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center>
                    <h5>ADS</h5>
                  </center>
              </div>
            </div>
          </div>
          <div class="col-md-2"">
            <div class="panel panel-default">
                <div class="panel-body">
                  <center>
                    <span class="fa fa-quora"></span>
                  </center>
              </div>
            </div>
          </div> -->

        </div>
      </div>
@endsection