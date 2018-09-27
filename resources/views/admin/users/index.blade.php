	<section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-users"></i>
        Gestión de usuarios
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active"><i class="fa fa-users"></i> Gestión de usuarios</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
		 <div class="panel panel-default">
		 	<div class="panel-heading" >Lista de usuarios</div>
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
			<div class="col-lg-2 col-xs-6">
				<button type="button" class="btn btn-primary btn-md btn-block" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar Instructor</button>
			</div>
			<div class="col-lg-4 col-lg-offset-6 col-xs-6">
			    <div class="input-group">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button"> <span class="glyphicon glyphicon-search"></span></button>
			      </span>
			      <input type="text" class="form-control" placeholder="Nombre" ng-model="search.name">
			    </div>
			</div>
		</div>
		<br>
		<div class="table-responsive">
		<table class="table " >
		    <thead>
		      <tr>
		      	<!-- <th></th> -->
		      	<th>N°</th>
		        <th>Nombre</th>
		        <th>Correo electrónico</th>
		        <th>Tipo de usuario</th>
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>
		      <div ng-show="users.length == 0">
		      	<div class="alert alert-warning">
				   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				   	 <h5> <span class="glyphicon glyphicon-info-sign"></span> No se encontraron resultados.</h5>
				</div>
		      </div>
		      <tr ng-repeat="user in users | filter:search:startsWith | orderBy:'name'">
		      	<!-- <td style="text-align: center"><input type="checkbox" name=""></td> -->
		      	<td><label class="label label-default">@{{$index+1}}</label></td>
		      	<!-- <td>@{{user.id}}</td> -->
		        <td ng-bind="user.name"></td>
		        <td ng-bind="user.email"></td>
		        <td ng-if="user.type == 1"><span class="label label-danger">Administrador</span></td>
		        <td ng-if="user.type == 2"><span class="label label-info">Instructor</span></td>
		        <td ng-if="user.type == 3"><span class="label label-success">Docente participante</span></td>
		        <td style="text-align: center"><a ng-click="selectUser(user)" class="btn btn-warning" data-toggle="modal" data-target="#myModalEdit"> <span class="glyphicon glyphicon-edit"></span> Editar</a>
		        <a ng-if="user.type != 1" ng-click="selectUser(user)" class="btn btn-danger" data-toggle="modal" data-target="#myModalDelete"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>
		        <a ng-if="user.type == 1" class="btn btn-danger" data-toggle="modal" data-target="#myModalDeleteAdmin"><span class="glyphicon glyphicon-trash"></span> Eliminar</a>

				</td>
		      </tr>
		      <div data-pagination="" data-num-pages="numPages()" 
			      data-current-page="currentPage" data-max-size="maxSize"  
			      data-boundary-links="true">
			  </div>
		    </tbody>
  		</table>
  		Total de usuarios <label class="label label-warning">@{{users.length}}</label> 
  		</div>
  		</div>
 		</section>
    	<!-- /.content -->
  		</div>
  		<!-- /.content-wrapper -->
  		<!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header" style="background-color: #285675;color: #fff;">
		          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
		          <h4 class="modal-title"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Agregar instructor</h4>
		        </div>
		        <div class="modal-body">
			        <form class="form-horizontal">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Nombre</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" id="name" name="name" ng-model="newUser.name" autofocus>
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="email">E-mail</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" id="email" name="email" ng-model="newUser.email">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="password">Contraseña</label>
					      <div class="col-sm-10">          
					        <input type="password" class="form-control" id="password" name="password" ng-model="newUser.password">
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-success" ng-click="setUser()" data-dismiss="modal">Aceptar</button>
					      </div>
					    </div>
					 </form>
		        </div> 
		        <div class="modal-footer" style="background-color: #ecf0f5;">
		          <button type="button" class="btn btn-danger" data-dismiss="modal"> <span class="glyphicon glyphicon-remove"></span> Cancelar</button>
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
		        <div class="modal-header" style="background-color: #285675;color: #fff;">
		          <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
		          <h4 class="modal-title"> <span class="glyphicon glyphicon-edit"></span> Editar usuario</h4>
		        </div>
		        <div class="modal-body">
			        <form class="form-horizontal">
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="name">Nombre</label>
					      <div class="col-sm-10">
					        <input type="text" class="form-control" ng-model="editUser.name">
					      </div>
					    </div>
					    <div class="form-group">
					      <label class="control-label col-sm-2" for="email">E-mail</label>
					      <div class="col-sm-10">          
					        <input type="text" class="form-control" ng-model="editUser.email">
					      </div>
					    </div>
					    <div class="form-group">        
					      <div class="col-sm-offset-2 col-sm-10">
					        <button type="submit" class="btn btn-success" ng-click="updateUser(editUser.id)" data-dismiss="modal">Aceptar</button>
					      </div>
					    </div>
					 </form>
		        </div> 
		        <div class="modal-footer" style="background-color: #ecf0f5;">
		          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
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
		          <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> &nbsp;Eliminar usuario</h4>
		        </div>
		        <div class="modal-body">
		         	¿Está seguro de que desea eliminar permanentemente al usuario @{{editUser.name}}?
		        </div> 
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default" data-dismiss="modal" ng-click="deleteUser(editUser.id)">Si</button>
		          <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		        </div>
		      </div>
		    </div>
			</div>

			<div class="modal fade" id="myModalDeleteAdmin" role="dialog">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title"><span class="glyphicon glyphicon-trash"></span> &nbsp;Eliminar usuario</h4>
			        </div>
			        <div class="modal-body">
			         	No es posible eliminar al administrador del sistema
			        </div> 
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Aceptar</button>
			        </div>
			      </div>
			    </div>
			</div>
