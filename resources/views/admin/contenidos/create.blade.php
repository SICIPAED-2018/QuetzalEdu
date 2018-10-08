	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-plus"></i>
        Agregar contenido
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active">Agregar contenido</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
  		<div class="panel panel-default">
  		 	<div class="panel-heading">Agregar contenido</div>
  		    <div class="panel-body">
                <div class="alert alert-danger" ng-if="message_error">
                   <a class="close"  ng-click="clearMessage()">&times;</a>
                    <ul ng-repeat="message_err in message_error">
                        <li ng-bind="message_err"></li>
                    </ul>
                </div>
        		<div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label>Título del curso</label>
                        <input type="text" name="" ng-model="newContenido.titulo" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Área conocimiento</label>
                        <select class="form-control" id="areas" name="areas" ng-model="newContenido.id">
                            <option disabled selected>Selecciona una opción</option>
                            <option ng-repeat="area in areas" value="@{{area.id}}">@{{area.area_conocimiento}}</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Descripción del curso</label>
                        <textarea ng-model="newContenido.descripcion" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <label>Información General</label>
                          <input type="file" name="" class="form-control" file-model = "newContenido.informacion">
                      </div>
                      <div class="form-group">
                        <label>Video General</label>
                        <input type="file" name="" class="form-control" file-model = "newContenido.video">
                      </div>
                      <div class="form-group">
                        <label>Actividades</label>
                        <input type="file" name="" class="form-control" file-model = "newContenido.actividad" multiple="">
                      </div>
                      <div class="form-group">
                        <label>Formatos</label>
                        <input type="file" name="" class="form-control" file-model = "newContenido.formato">
                      </div>
                      <div class="form-group">
                        <label>Mochila</label>
                        <input type="file" name="" class="form-control" file-model = "newContenido.mochila">
                      </div>
                      <a href="#!/contenido" class="btn btn-danger">Cancelar</a>
                      <button type="submit" class="btn btn-success" ng-click="setContenido()">Guardar</button>
                    </div>
        		</div>
    	    </div>
    	</div>
 	</section>
