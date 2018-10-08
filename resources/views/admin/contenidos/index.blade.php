<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-ravelry"></i>
        Lista de contenidos de curso
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active"><i class="fa fa-ravelry"></i> Gestión de contenidos</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
		 <div class="panel panel-default">
		 	<div class="panel-heading">Lista de contenidos de curso</div>
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
				<a type="button" class="btn btn-primary btn-md btn-block" href="#!/contenido/create"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar contenido</a>
			</div>
			<div class="col-lg-4 col-lg-offset-5 col-xs-6">
			    <div class="input-group">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span></button>
			      </span>
			      <input type="text" class="form-control" placeholder="Nombre" ng-model="search.titulo">
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
		        <th>Contenidos</th>
		        <th></th>
		        <th class="text-center"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <div ng-show="contenidos.length == 0">
		      	<div class="alert alert-warning">
				   <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   	 <h5> <span class="glyphicon glyphicon-info-sign"></span> No se encontraron resultados.</h5>
				</div>
		      </div>
		      <tr ng-repeat="contenido in contenidos | filter:search:startsWith">
		      	<!-- <td style="text-align: center"><input type="checkbox" name=""></td> -->
		      	<td><label class="label label-default">@{{$index+1}}</label></td>
		      	<!-- <td>@{{user.id}}</td> -->
		        <td>@{{contenido.titulo}}</td>
		        <td>@{{contenido.area.area_conocimiento}}</td>
		        <td><a href="" class="btn btn-default"><span class="fa fa-briefcase"></span></a></td>
		        <td style="text-align: center"><a ng-click="selectArea(area)" class="btn btn-warning" data-toggle="modal" data-target="#myModalEdit"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
		        <a ng-click="selectContenido(contenido)" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><span class="glyphicon glyphicon-trash"></span> Eliminar</a></td>
		      </tr>
		    </tbody>
  		</table>
  		Total de cursos <label class="label label-warning">@{{contenidos.length}}</label> 
  		</div>
  		</div>
 		</section>
    	<!-- /.content -->

		   <!-- eliminar modal -->
		   <!-- Modal -->
		  <div class="modal fade" id="myModalDelete" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> &nbsp;Eliminar contenido del curso</h4>
		        </div>
		        <div class="modal-body">
		         	¿Está seguro de que desea eliminar permanentemente el contenido del curso @{{editContenido.titulo}}?
		        </div> 
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal" ng-click="deleteContenido(editContenido.id)">Si</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		        </div>
		      </div>
		    </div>
		  </div>



