<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomepageController@index');
Route::get('/institucion/{institucion?}', 'InstitucionController@index');



Route::auth();

/*Route::get('protected', ['middleware' => ['auth', 'superuser'],
	function(){
		return view('institucion');
	}]);*/




Route::group(array('prefix' => 'superuser', 'namespace' => 'Superuser', 'middleware' => ['superuser','auth']), function(){
	Route::get('/dashboard/informacionInstitucional', 'HomeController@informacionInstitucional');
	Route::get('/dashboard/estadisticas', 'HomeController@estadisticas');
	Route::get('/dashboard/nuevoEvento', 'HomeController@nuevoEvento');
	Route::get('/dashboard/listaEventos', 'HomeController@listaEventos');
});