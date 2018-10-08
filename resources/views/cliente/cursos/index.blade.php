<div style="margin-top: 100px;">
	<h1>@{{curso.area_conocimiento}}</h1>
	<video ng-src="@{{curso.video_general}}">
		
	</video>


	<div ng-repeat="contenido in curso.contenidos">

	<h1>Actividades del curso @{{contenido.titulo}}</h1>

	</div>

	
</div>