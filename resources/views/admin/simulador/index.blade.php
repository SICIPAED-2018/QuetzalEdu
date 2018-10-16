<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-connectdevelop"></i>
        Banco de preguntas
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active">Banco de preguntas</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
		 <div class="panel panel-default">
		 	<div class="panel-heading">Lista de preguntas</div>
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
				<a type="button" class="btn btn-primary btn-md btn-block" href="#!/preguntas/create"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar pregunta</a>
			</div>
			<div class="col-lg-4 col-lg-offset-5 col-xs-6">
			    <div class="input-group">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span></button>
			      </span>
			      <input type="text" class="form-control" placeholder="Examen" ng-model="search.pregunta">
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
		        <th>Pregunta</th>
		        <th>Examen</th>
		        <th class="text-center"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <div ng-show="preguntas.length == 0">
		      	<div class="alert alert-warning">
				   <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   	 <h5> <span class="glyphicon glyphicon-info-sign"></span> No se encontraron resultados.</h5>
				</div>
		      </div>
		      <tr ng-repeat="pregunta in preguntas | filter:search:strict">
		      	<!-- <td style="text-align: center"><input type="checkbox" name=""></td> -->
		      	<td><label class="label label-default">@{{$index+1}}</label></td>
		      	<!-- <td>@{{user.id}}</td> -->
		        <td>@{{pregunta.pregunta}}</td>
		        <td>@{{pregunta.examen.tipo_examen}}</td>
		        <td style="text-align: center">

		        <a ng-click="selectPregunta(pregunta)" class="btn btn-warning" > <span class="glyphicon glyphicon-edit"></span> Editar</a>

		        <a ng-click="selectPreguntadelete(pregunta)" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>


		    </td>
		      </tr>
		    </tbody>
  		</table>
  		Total de preguntas <label class="label label-warning">@{{preguntas.length}}</label> 
  		</div>
  		</div>
 		</section>
    	<!-- /.content -->



  		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar area de conocimiento</h4>
		        </div>
		        <div class="modal-body">
			        <form class="form-horizontal" enctype="multipart/form-data">

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Nombre</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="area_conocimiento" name="area_conocimiento" ng-model="newArea.area_conocimiento" autofocus>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="info">Información General</label>
					      <div class="col-sm-10">
					        <input type="file" class="form-control" id="informacion_general" name="informacion_general" file-model = "newArea.informacion_general" autofocus>
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="video">Video General</label>
					      <div class="col-sm-10">
					        <input type="file" class="form-control" id="video_general" name="video_general" file-model = "newArea.video_general" autofocus>
					      </div>
					    </div>

					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default" ng-click="setArea()" data-dismiss="modal">Aceptar</button>
					      </div>
					    </div>
					 </form>
		        </div> 
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancelar</button>
		        </div>
		      </div>
		    </div>
		  </div>

		  <!-- edit modal -->
		  <!-- Modal -->
		  <div class="modal fade" id="myModalEdit" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"> <span class="glyphicon glyphicon-edit"></span> Editar area de conocimiento</h4>
		        </div>
		        <div class="modal-body">
			        <form class="form-horizontal">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Nombre</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" ng-model="editArea.area_conocimiento">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="info">Información General</label>
					      <div class="col-sm-10">
					        <input type="file" class="form-control" id="informacion_general" name="informacion_general" file-model = "editArea.informacion_general">
					      </div>
					    </div>

					    <div class="form-group">
					      <label class="control-label col-sm-2" for="video">Video General</label>
					      <div class="col-sm-10">
					        <input type="file" class="form-control" id="video_general" name="video_general" file-model = "editArea.video_general">
					      </div>
					    </div>

					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-default" ng-click="updateArea(editArea.id)" data-dismiss="modal">Aceptar</button>
					      </div>
					    </div>
					 </form>
		        </div> 
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
		        </div>
		      </div>
		    </div>
		  </div>

		   <!-- eliminar modal -->
		   <!-- Modal -->
		  <div class="modal fade" id="myModalDelete" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> &nbsp;Eliminar pregunta</h4>
		        </div>
		        <div class="modal-body">
		         	¿Está seguro de que desea eliminar permanentemente esta pregunta?
		        </div> 
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal" ng-click="deletePregunta(editPregunta.id)">Si</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		        </div>
		      </div>
		    </div>
		  </div>



