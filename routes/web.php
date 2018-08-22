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

//ACCESOS AL SISTEMA

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('user.type');

Route::get('logout', function () {
    Cache::flush();
    Auth::logout();
    return Redirect::to('/');
});

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

Route::post('setPreguntas', 'SimuladorExamenController@setPreguntas');

Route::delete('deletePreguntas/{id}', 'SimuladorExamenController@deletePreguntas');

//LOGIN CON FACEBOOK

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');

Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');




Route::get('examenes/{id}','SimuladorExamenController@getExamenes');

Route::get('preguntas/examenes/{id}','SimuladorExamenController@getExamenes');




