
      <div class="container-fluid" style="padding-top: 80px;">
        <div class="row">
          <div class="col-md-3">
            <div class="panel panel-default" style="background: #285675;">
                <div class="panel-body">
                  <h4 class="text-center" style="color: #fff;"> &nbsp;Bienvenido(a)</h4>
                  <center><img src="{{ asset('/img/avatar.png')}}" alt="Avatar" class="img-circle" style="height:106px;width:106px"></center>
                  <h4 class="text-center" style="color: #fff;"><i class="fa fa-circle text-success"></i> &nbsp;{{ Auth::user()->name }}</h4>
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
                </div>
              </div>
          </div>







          <div class="col-md-9" >
              <div class="panel panel-default">
                <div class="panel-heading"><span class="fa fa-th-large"></span> Mis cursos</div>
                <div class="panel-body" >
                    <div class="row">
                        <div class="col-xs-8 col-md-4" ng-repeat="area in areas">
                          <div class="panel panel-default">
                          <img ng-src="@{{area.imagen_general}}" style="width: 100%;">
                          <div class="panel-heading" style="background: #f0ca7c;border-radius: 0px;text-align: center;border-top: solid 5px #fff;">
                            <h4 style="color: #fff;">@{{area.area_conocimiento}}</h4>
                            <button class="btn btn-warnig" style="background: #ebbf65;color: #fff;    box-shadow: 1px 1px 4px rgba(0,0,0,0.4);" ng-click="goCurso(area)">Entrar a curso</button>
                          </div>
                          </div>
                        </div>
                    </div>
              </div><!--panel-body-->
            </div><!--panel panel-default-->
          </div>







        </div>
      </div>
