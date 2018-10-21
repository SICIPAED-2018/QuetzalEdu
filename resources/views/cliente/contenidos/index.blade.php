


<h1>@{{contenido.area.area_conocimiento}}</h1>


<h1> @{{contenido.titulo}}</h1>

<h3> @{{contenido.descripcion}}</h3>



			
				<div class="tab-pane" id="info-tab" style="padding-top: 10px;">
	                <div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" ng-src="@{{contenido.informacion}}" allowfullscreen></iframe>
					</div>
	            </div>
	        

	        <h2>Actividades</h2>

	        <div ng-repeat="actividad in contenido.actividades">
	        	<div class="tab-pane" id="info-tab" style="padding-top: 10px;">
	                <div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" ng-src="@{{actividad.actividad}}" allowfullscreen></iframe>
					</div>
	            </div>
	        </div>


	        <h2>Mochila</h2>

	        <div ng-repeat="mochila in contenido.mochila">
	        	<div class="tab-pane" id="info-tab" style="padding-top: 10px;">
	                <div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" ng-src="@{{mochila.mochila}}" allowfullscreen></iframe>
					</div>
	            </div>
	        </div>
