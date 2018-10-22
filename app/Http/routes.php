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

Route::get('/altamun','municipio@altamun');
Route::get('/altausuario','usuario@altausuario');
<<<<<<< HEAD
Route::get('/altaempleado','empleado@altaempleado');
=======
Route::get('/altaemp','empleado@altaempleado');
>>>>>>> 17a3c8e0b7525e7281214846a5f089650258d423
