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


Route::get('/ingresar', 'AdminController@ingresar')->name('ingresar');
Route::get('/salir', 'AdminController@salir')->name('salir');
Route::get('/admin', 'AdminController@admin')->name('admin');
Route::post('/descargar', 'AdminController@descargar')->name('descargar');

Auth::routes();

Route::get('/login', 'AdminController@ingresar')->name('ingresar');
Route::get('/register', 'AdminController@ingresar')->name('ingresar');