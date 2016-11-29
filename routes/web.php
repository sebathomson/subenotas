<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'AppController@inicio')->name('inicio');
Route::get('/respuesta', 'AppController@respuesta')->name('respuesta');

Route::get('/colegio-por-comuna', 'AppController@colegioPorComuna')->name('colegioporcomuna');

Route::post('/guardar', 'AppController@guardar')->name('guardar');

Route::get('/descargar', 'AdminController@descargar')->name('descargar');