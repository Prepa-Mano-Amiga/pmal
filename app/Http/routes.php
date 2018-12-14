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

//Vista Administracion
Route::get('/index','administrador@index');

//catalogo Alumnos
Route::get('/altaAlum','alumno@altaAlum');
Route::POST('/guardAlum','alumno@guardaAlum')->name('guardaAlum');
Route::get('/reportealum','alumno@reportealum');
Route::get('/eliminaalum/{ida}','alumno@eliminaalum')->name('eliminaalum');
Route::get('/efisicaA/{ida}','alumno@efisicaA')->name('efisicaA');
Route::get('/restauraalum/{ida}','alumno@restauraalum')->name('restauraalum');
Route::get('/modificaAl/{ida}','alumno@modificaAl')->name('modificaAl');
Route::POST('/editAlum','alumno@editAlum')->name('editAlum');

//catalogo municipio
Route::get('/altamun','municipio@altamun');
Route::POST('/guardamun','municipio@guardamun')->name('guardamun');
Route::get('/reportemun','municipio@reportemun');
Route::get('/eliminamun/{idm}','municipio@eliminamun')->name('eliminamun');
Route::get('/efisicamun/{idm}','municipio@efisicamun')->name('efisicamun');
Route::get('/restauramun/{idm}','municipio@restauramun')->name('restauramun');
Route::get('/modificamun/{idm}','municipio@modificamun')->name('modificamun');
Route::POST('/editmun','municipio@editmun')->name('editmun');

//catalogo estado
Route::get('/altaest','estado@altaestado');
Route::POST('/guardaestado','estado@guardaestado')->name('guardaestado');
Route::get('/reporteEstados','estado@reporteEstado');
Route::get('/eliminaestado/{ide}','estado@eliminaestado')->name('eliminaestado');
Route::get('/efisicaestado/{ide}','estado@efisicaestado')->name('efisicaestado');
Route::get('/restauraestado/{ide}','estado@restauraestado')->name('restauraestado');
Route::get('/modificaEst/{ide}','estado@modificaEst')->name('modificaEst');
Route::POST('/editaEstado','estado@editaEstado')->name('editaEstado');

//catalogo usuario
Route::get('/altausuario','usuario@altausuario');
Route::POST('/guardausuario','usuario@guardausuario')->name('guardausuario');
Route::get('/reporteusuario','usuario@reporteusuario');
Route::get('/eliminausuario/{idu}','usuario@eliminausuario')->name('eliminausuario');
Route::get('/efisicau/{idu}','usuario@efisicau')->name('efisicau');
Route::get('/restaurausuario/{idu}','usuario@restaurausuario')->name('restaurausuario');
Route::get('/modificausuario/{idu}','usuario@modificausuario')->name('modificausuario');
Route::POST('/editusuario','usuario@editusuario')->name('editusuario');

//Catalogo Escuela
Route::get('/altaescuela','escuela@altaescuela');
Route::POST('/guardaescuela','escuela@guardaescuela')->name('guardaescuela');
Route::get('/reporteEscuelas','escuela@reporteEscuelas');
Route::get('/eliminaescuela/{ides}','escuela@eliminaescuela')->name('eliminaescuela');
Route::get('/efisicaes/{ides}','escuela@efisicaes')->name('efisicaes');
Route::get('/restauraescuela/{ides}','escuela@restauraescuela')->name('restauraescuela');
Route::get('/modificaEscuela/{ides}','escuela@modificaEscuela')->name('modificaEscuela');
Route::POST('/editaEscuela','escuela@editaEscuela')->name('editaEscuela');

//Catalogo tutores
Route::get('/altaTutor','tutor@altaTutor');
Route::POST('/guardaTutor','tutor@guardaTutor')->name('guardaTutor');
Route::get('/reporteTutor','tutor@reporteTutor');
Route::get('/eliminatutor/{idt}','tutor@eliminatutor')->name('eliminatutor');
Route::get('/efisicat/{idt}','tutor@efisicat')->name('efisicat');
Route::get('/restauratutor/{idt}','tutor@restauratutor')->name('restauratutor');
Route::get('/modificaTutor/{idt}','tutor@modificaTutor')->name('modificaTutor');
Route::POST('/editaTutor','tutor@editaTutor')->name('editaTutor');

//catalogo empleado
Route::get('/altaemp','empleado@altaempleado');
Route::POST('/guardaempleado','empleado@guardaempleado')->name('guardaempleado');
Route::get('/reporteempleado','empleado@reporteempleado');
Route::get('/eliminaempleado/{idbe}','empleado@eliminaempleado')->name('eliminaempleado');
Route::get('/efisicae/{idbe}','empleado@efisicae')->name('efisicae');
Route::get('/restauraempleado/{idbe}','empleado@restauraempleado')->name('restauraempleado');
Route::get('/modificaempleado/{idbe}','empleado@modificaempleado')->name('modificaempleado');
Route::POST('/editaempleado','empleado@editaempleado')->name('editaempleado');

//catalogo registro medico
Route::get('/altaregmedicos','medico@altaregmedicos');
Route::POST('/guardaregmedico','medico@guardaregmedico')->name('guardaregmedico');
Route::get('/reporteregmedico','medico@reporteregmedico');
Route::get('/eliminaregmedico/{idrm}','medico@eliminaregmedico')->name('eliminaregmedico');
Route::get('/efisicamed/{idrm}','medico@efisicamed')->name('efisicamed');
Route::get('/restauraregmedico/{idrm}','medico@restauraregmedico')->name('restauraregmedico');
Route::get('/modificaregmedico/{idrm}','medico@modificaregmedico')->name('modificaregmedico');
Route::POST('/editaregmedico','medico@editaregmedico')->name('editaregmedico');

//Catalogo libros
Route::get('/altalibro','libro@altalibro');
Route::POST('/guardalibro','libro@guardalibro')->name('guardalibro');
Route::get('/reportelibro','libro@reportelibro');
Route::get('/eliminalibro/{idl}','libro@eliminalibro')->name('eliminalibro');
Route::get('/efisicalibro/{idl}','libro@efisicalibro')->name('efisicalibro');
Route::get('/restauralibro/{idl}','libro@restauralibro')->name('restauralibro');
Route::get('/modificalibro/{idl}','libro@modificalibro')->name('modificalibro');
Route::POST('/editalibro','libro@editalibro')->name('editalibro');

//Login
Route::get('/login','login@login')->name('login');
Route::POST('/valida','login@valida')->name('valida');
Route::get('/cerrarsesion','login@cerrarsesion')->name('cerrarsesion');
Route::get('/principal','login@principal')->name('principal');