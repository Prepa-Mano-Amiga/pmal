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

Route::get('/', function () {
    return view('welcome');
});

//catalogo municipio
Route::get('/altamun','municipio@altamun');
//catalogo estado
Route::get('/altaest','estado@altaestado');
Route::POST('/guardaestado','estado@guardaestado')->name('guardaestado');
Route::get('/reporteEstados','estado@reporteEstado');
//catalogo usuario
Route::get('/altausuario','usuario@altausuario');
Route::POST('/guardausuario','usuario@guardausuario')->name('guardausuario');
Route::get('/reporteusuario','usuario@reporteusuario');
//catalogo empleado
Route::get('/altaemp','empleado@altaempleado');

