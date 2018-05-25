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

//HomePage QuetzalEdu

Route::get('/', function () {
    return view('index.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Login con facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook.login');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
