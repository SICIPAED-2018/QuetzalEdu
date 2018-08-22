	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="font-size: 28px;">
        <i class="fa fa-plus"></i>
        Agregar Pregunta
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('home')}}"> Home</a></li>
        <li class="active">Agregar Pregunta</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
  		<div class="panel panel-default">
  		 	<div class="panel-heading">Agregar Pregunta</div>
  		    <div class="panel-body">
        		<div class="row">

        				<div class="col-lg-6">
                        <div class="form-group">
<textarea name="pregunta" class="form-control" rows="7" autofocus="" ng-model="newPregunta.pregunta" autofocus>
                                
</textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="nivel" name="nivel" >
                                <option disabled selected>Selecciona una opción</option>
                                @foreach($niveles as $nivel)
                                    <option value='{{$nivel->id}}'>{{$nivel->nivel_educativo}}</option>
                                @endforeach()
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="tipo" id="tipo">
                                <option disabled selected>Selecciona una opción</option>
                            </select>
                        </div>
                </div>


                <div class="col-lg-6">
                        <table class="table">
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" name="respuesta[]" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" name="correcta[]" value="0">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" name="respuesta[]" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" name="correcta[]" value="1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" name="respuesta[]" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" name="correcta[]" value="2">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" name="respuesta[]" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" name="correcta[]" value="3">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group">
                          <a href="#!/preguntas" class="btn btn-danger">Cancelar</a>
                          <button type="submit" class="btn btn-success" ng-click="setPregunta()">Guardar</button>
                      </div>
                    </div>



        		</div>
    	    </div>
    	</div>
 	  </section>
