@extends('sistema.principal')

@section('contenido')

<h1> Alta de usuarios </h1>
<br>

<form action ='{{route('guardausuario')}}'  method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idu'))
	<i>{{$errors->first('idu')}}</i>
	@endif <br>
	
Clave usuario <input type = 'text' name = 'idu' value="{{$idus}}" readonly="readonly">
<br>
	@if($errors->first('usuario'))
	<i>{{$errors->first('usuario')}}</i>
	@endif <br>
 Nombre de Usuario <input type ='text' name = 'usuario' value="{{old('usuario')}}" >
<br>
	@if($errors->first('password'))
	<i>{{$errors->first('password')}}</i>
	@endif <br>
Contraseña <input type = 'password' name = 'password' value="{{old('password')}}">
<br>
@if($errors->first('tipo_usu'))
	<i>{{$errors->first('tipo_usu')}}</i>
	@endif <br>
Tipo de usuario <input type ='text' name='tipo_usu' value="{{old('tipo_usu')}}">
<br>
@if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif <br>
Nombre<input type ='text' name ='nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('ap_pat'))
	<i>{{$errors->first('ap_pat')}}</i>
	@endif <br>
Apellido Paterno<input type ='text' name ='ap_pat' value="{{old('ap_pat')}}">
<br>
@if($errors->first('ap_mat'))
	<i>{{$errors->first('ap_mat')}}</i>
	@endif <br>
Apellido Materno<input type ='text' name ='ap_mat' value="{{old('ap_mat')}}">
<br>
<input type = 'submit' balue='Guardar'>
<br>
</form>
@stop