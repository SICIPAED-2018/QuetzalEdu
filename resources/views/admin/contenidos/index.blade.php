	<section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-ravelry"></i>
        Gestión de contenidos
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active">Gestión de contenidos</li>
      </ol>
    </section>
    <!-- Main content -->
    
    <section class="content">
     <div class="panel panel-default">
      <div class="panel-heading">Lista de contenidos</div>
     <div class="panel-body">
      <div class="alert alert-success" ng-if="message">
         <a class="close"  ng-click="clearMessage()">&times;</a>
            <li ng-bind="message"></li>
      </div>
      <div class="alert alert-danger" ng-if="message_error">
         <a class="close"  ng-click="clearMessage()">&times;</a>
          <ul ng-repeat="message_err in message_error">
            <li ng-bind="message_err"></li>
          </ul>
      </div>
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <a type="button" class="btn btn-primary btn-md btn-block" href="#!/preguntas/create"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar contenido</a>
        </div>
        <div class="col-lg-4 col-lg-offset-5 col-xs-6">
            <div class="input-group">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span></button>
              </span>
              <input type="text" class="form-control" placeholder="Curso" ng-model="search.examen.tipo_examen">
            </div>
        </div>
      </div>
      <br>
      <div class="table-responsive">
      <table class="table table-striped" >
          <thead>
            <tr>
              <!-- <th></th> -->
              <th>N°</th>
              <th>Título de curso</th>
              <th>Área de conocimiento</th>
              <th class="text-center"></th>
            </tr>
          </thead>
          <tbody>
            <div ng-show="">
              <div class="alert alert-warning">
             <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <h5> <span class="glyphicon glyphicon-info-sign"></span> No se encontraron resultados.</h5>
          </div>
            </div>
            <tr ng-repeat="">
              <!-- <td style="text-align: center"><input type="checkbox" name=""></td> -->
              <td><label class="label label-default"></label></td>
              <!-- <td>@{{user.id}}</td> -->
              <td></td>
              <td></td>
              <td style="text-align: center">
              <a ng-click="selectPregunta(pregunta)" class="btn btn-warning" > <span class="glyphicon glyphicon-edit"></span> Editar</a>
              <a ng-click="selectPreguntadelete(pregunta)" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
              </td>
            </tr>
          </tbody>
        </table>
        Total de preguntas <label class="label label-warning"></label> 
        </div>
      </div>
    </section>
      <!-- /.content -->
  	