@extends('sistema.principal')

@section('contenido')
<h1> Alta de Empleados </h1>
<br>
<form action ="{{route('guardaempleado')}}" method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idbe'))
	<i>{{$errors->first('idbe')}}</i>
	@endif <br>
	
Clave empleado <input type = 'text' name = 'idbe' value="{{$idbe}}" readonly="readonly">
<br>
	@if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif <br>
 Nombre de empleado <input type ='text' name = 'nombre' value="{{old('nombre')}}" >
<br>
	@if($errors->first('ap_pat'))
	<i>{{$errors->first('ap_pat')}}</i>
	@endif <br>
apellido paterno <input type = 'text' name = 'ap_pat' value="{{old('ap_pat')}}">
<br>
@if($errors->first('ap_mat'))
	<i>{{$errors->first('ap_mat')}}</i>
	@endif <br>
apellido materno <input type ='text' name = 'ap_mat' value="{{old('ap_mat')}}">
<br>
@if($errors->first('turno'))
	<i>{{$errors->first('turno')}}</i>
	@endif <br>
Turno<input type ='text' name ='turno' value="{{old('turno')}}">
<br>
@if($errors->first('correo'))
	<i>{{$errors->first('correo')}}</i>
	@endif <br>
Correo<input type ='text' name ='correo' value="{{old('correo')}}">
<br>
@if($errors->first('telefono'))
	<i>{{$errors->first('telefono')}}</i>
	@endif <br>
Telefono<input type ='text' name ='telefono' value="{{old('telefono')}}">
<br>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
@stop