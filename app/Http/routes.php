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


//catalogo Alumnos
Route::get('/altaAlum','alumno@altaAlum');
Route::POST('/guardAlum','alumno@guardaAlum')->name('guardaAlum');
Route::get('/reportealum','alumno@reportealum');
Route::get('/eliminaalum/{ida}','alumno@eliminaalum')->name('eliminaalum');
Route::get('/restauraalum/{ida}','alumno@restauraalum')->name('restauraalum');

//Vista Administracion
Route::get('/admin','administrador@admin');
//catalogo municipio
Route::get('/altamun','municipio@altamun');
Route::POST('/guardamun','municipio@guardamun')->name('guardamun');
Route::get('/reportemun','municipio@reportemun');
Route::get('/eliminamun/{idm}','municipio@eliminamun')->name('eliminamun');
Route::get('/restauramun/{idm}','municipio@restauramun')->name('restauramun');

//catalogo estado
Route::get('/altaest','estado@altaestado');
Route::POST('/guardaestado','estado@guardaestado')->name('guardaestado');
Route::get('/reporteEstados','estado@reporteEstado');
Route::get('/eliminaestado/{ide}','estado@eliminaestado')->name('eliminaestado');
Route::get('/restauraestado/{ide}','estado@restauraestado')->name('restauraestado');

//catalogo usuario
Route::get('/altausuario','usuario@altausuario');
Route::POST('/guardausuario','usuario@guardausuario')->name('guardausuario');
Route::get('/reporteusuario','usuario@reporteusuario');
Route::get('/eliminausuario/{idu}','usuario@eliminausuario')->name('eliminausuario');
Route::get('/restaurausuario/{idu}','usuario@restaurausuario')->name('restaurausuario');

//Catalogo Escuela
Route::get('/altaescuela','escuela@altaescuela');
Route::POST('/guardaescuela','escuela@guardaescuela')->name('guardaescuela');
Route::get('/reporteEscuelas','escuela@reporteEscuelas');
Route::get('/eliminaescuela/{ides}','escuela@eliminaescuela')->name('eliminaescuela');
Route::get('/restauraescuela/{ides}','escuela@restauraescuela')->name('restauraescuela');

//Catalogo tutores
Route::get('/altaTutor','tutor@altaTutor');
Route::POST('/guardaTutor','tutor@guardaTutor')->name('guardaTutor');
Route::get('/reporteTutor','tutor@reporteTutor');
Route::get('/eliminatutor/{ides}','tutor@eliminatutor')->name('eliminatutor');
Route::get('/restauratutor/{ides}','tutor@restauratutor')->name('restauratutor');

//catalogo empleado
Route::get('/altaemp','empleado@altaempleado');
Route::POST('/guardaempleado','empleado@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','empleado@reporteempleado');
Route::get('/eliminaempleado/{idbe}','empleado@eliminaempleado')->name('eliminaempleado');
Route::get('/restauraempleado/{idbe}','empleado@restauraempleado')->name('restauraempleado');

//catalogo registro medico
Route::get('/altaregmedicos','medico@altaregmedicos');
Route::POST('/guardaregmedico','medico@guardaregmedico')->name('guardaregmedico');
Route::get('/reporteregmedico','medico@reporteregmedico');
Route::get('/eliminaregmedico/{idrm}','medico@eliminaregmedico')->name('eliminaregmedico');
Route::get('/restauraregmedico/{idrm}','medico@restauraregmedico')->name('restauraregmedico');

//Catalogo libros
Route::get('/altalibro','libro@altalibro');
Route::POST('/guardalibro','libro@guardalibro')->name('guardalibro');
Route::get('/reportelibro','libro@reportelibro');
Route::get('/eliminalibro/{idl}','libro@eliminalibro')->name('eliminalibro');
Route::get('/restauralibro/{idl}','libro@restauralibro')->name('restauralibro');

