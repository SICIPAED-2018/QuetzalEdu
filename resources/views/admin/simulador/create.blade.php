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

                <div class="alert alert-danger" ng-if="message_error">
                   <a class="close"  ng-click="clearMessage()">&times;</a>
                    <ul ng-repeat="message_err in message_error">
                        <li ng-bind="message_err"></li>
                    </ul>
                </div>
                
        		<div class="row">

        				<div class="col-lg-6">
                        <div class="form-group">
<textarea name="pregunta" class="form-control" rows="7" autofocus="" ng-model="newPregunta.pregunta" autofocus>
                                
</textarea>
                        </div>

                        <div class="form-group">
                            <select class="form-control" id="nivel" name="nivel" ng-model="newPregunta.miExamen" ng-change="myFunc(newPregunta.miExamen)">
                                <option disabled selected>Selecciona una opción</option>
                                <option ng-repeat="nivel in niveles" value="@{{nivel.id}}">@{{nivel.nivel_educativo}}</option>
                                <!-- <option ng-repeat="nivel in niveles" value="@{{nivel.id}}">@{{nivel.nivel_educativo}}</option> -->
                            </select>
                        </div>



                        <div class="form-group">
                            <select class="form-control" name="tipo" id="tipo" ng-model="newPregunta.miTipoExamen">
                                <!-- <option disabled selected>Selecciona una opción</option> -->
                                <option disabled selected>Selecciona una opción</option>
                                <option ng-repeat="examen in examenes" value="@{{examen.id}}">@{{examen.tipo_examen}}</option>
                            </select>
                        </div>



                       
                </div>


                <div class="col-lg-6">
                        <table class="table">
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" ng-model="newPregunta.respuesta1" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" ng-model="newPregunta.correcta1" value="0" name="correcta">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" ng-model="newPregunta.respuesta2" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" ng-model="newPregunta.correcta2" value="1" name="correcta">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" ng-model="newPregunta.respuesta3" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" ng-model="newPregunta.correcta3" value="2" name="correcta">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="text" ng-model="newPregunta.respuesta4" class="form-control">
                                    </div>
                                </td>
                                <td style="border-top: none;">
                                    <div class="form-group">
                                        <input type="radio" ng-model="newPregunta.correcta4" value="3" name="correcta">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                   <!--  <input type="hidden" name="" ng-model="newPregunta.examen_id=2"> -->

                    <div class="col-lg-6">
                      <div class="form-group">
                          <a href="#!/preguntas" class="btn btn-danger">Cancelar</a>
                          <button type="submit" class="btn btn-success" ng-click="setPregunta()">Guardar</button>
                      </div>
                    </div>



        		</div>
    	    </div>
    	</div>
        <!-- <script type="text/javascript">
            $(document).ready(function(){
$("#nivel").change(function(event){
    $.get("examenes/"+event.target.value+"",function(response,state){
        $("#tipo").empty();
        for(i=0; i<response.length; i++){
            $("#tipo").append("<option value='"+response[i].id+"'> "+response[i].tipo_examen+"</option>")
        }
    });
});
});
        </script> -->
 	  </section>
