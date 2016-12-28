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

Route::get('/dashboard/informacionInstitucional', 'HomeController@informacionInstitucional');
Route::post('/dashboard/informacionInstitucional', 'HomeController@editarInformacionInstitucional');

Route::get('/dashboard/estadisticas', 'HomeController@estadisticas');

Route::get('/dashboard/nuevoAviso', 'HomeController@nuevoAviso');
Route::post('/dashboard/nuevoAviso', 'HomeController@guardarNuevoAviso');

Route::get('/dashboard/listaAvisos', 'HomeController@listaAvisos');
