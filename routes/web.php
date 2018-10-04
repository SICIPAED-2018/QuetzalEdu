<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//HOMEPAGE QUETZALEDU

Route::get('/', function () {
    return view('index.index');
});

Route::get('/competencias-docentes', function () {
    return view('index.cursos.competencias_docentes');
});

Route::get('/estrategias-docentes', function () {
    return view('index.cursos.estrategias_docentes');
});

Route::get('/desarrollo-y-planeacion', function () {
    return view('index.cursos.desarrollo_y_planeacion');
});

Route::get('/examenes-de-oposicion', function () {
    return view('index.cursos.examenes_de_oposicion');
});


//ACCESOS AL SISTEMA

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('user.type');

Route::get('logout', function () {
    Cache::flush();
    Auth::logout();
    return Redirect::to('/');
});


//LOGIN CON FACEBOOK

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');



//SPA ADMINISTRADOR E INSTRUCTOR CON ANGULARJS
Route::get('/inicio', function () {
	if(Auth::user()->type==1){
    	return view('admin.home');
	}
	else if(Auth::user()->type==2){
    	return view('instructor.home');
	}
});



// ADMINISTRADOR 

//GESTION DE USUARIOS

Route::resource('/users', 'UsersController');

Route::get('getUsers', 'UsersController@getUsers');

Route::post('setUsers', 'UsersController@setUsers');

Route::put('updateUsers/{id}', 'UsersController@updateUsers');

Route::delete('deleteUsers/{id}', 'UsersController@deleteUsers');

//GESTION DE AREAS DE CONOCIMIENTO

Route::resource('/areas', 'AreaConocimientoController');

Route::get('getAreas', 'AreaConocimientoController@getAreas');

Route::post('setAreas', 'AreaConocimientoController@setAreas');

Route::put('updateAreas/{id}', 'AreaConocimientoController@updateAreas');

Route::delete('deleteAreas/{id}', 'AreaConocimientoController@deleteAreas');

//GESTION DE BANCO DE PREGUNTAS

Route::resource('/preguntas', 'SimuladorExamenController');

Route::get('getPreguntas', 'SimuladorExamenController@getPreguntas');

Route::get('getNiveles', 'SimuladorExamenController@getNiveles');

Route::post('setPreguntas', 'SimuladorExamenController@setPreguntas');

Route::delete('deletePreguntas/{id}', 'SimuladorExamenController@deletePreguntas');


//SELECT DINÁMICO

Route::get('examenes/{id}','SimuladorExamenController@getExamenes');

Route::get('preguntas/examenes/{id}','SimuladorExamenController@getExamenes');


//GESTION DE CONTENIDOS

Route::resource('/contenido', 'ContenidoCursoController');

Route::get('getContenidos', 'ContenidoCursoController@getContenidos');

Route::post('setContenidos', 'ContenidoCursoController@setContenidos');

Route::delete('deleteContenidos/{id}', 'ContenidoCursoController@deleteContenidos');

//GESTION DE PAGOS

Route::resource('/pagos', 'PagosController');






