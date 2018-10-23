@extends('sistema.principal')

@section('contenido')
<h1> Alta de Registro Medico </h1>
<br>
<form action ="{{route('guardaregmedico')}}" method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idrm'))
	<i>{{$errors->first('idrm')}}</i>
	@endif <br>
	
Clave de registro <input type = 'text' name = 'idrm' value="{{$idrm}}" readonly="readonly">
<br>
	@if($errors->first('responsable'))
	<i>{{$errors->first('responsable')}}</i>
	@endif <br>
 Nombre<input type ='text' name = 'responsable' value="{{old('responsable')}}" >
<br>
	@if($errors->first('num_hermanos'))
	<i>{{$errors->first('num_hermanos')}}</i>
	@endif <br>
Numero de hermanos <input type = 'text' name = 'num_hermanos' value="{{old('num_hermanos')}}">
<br>
@if($errors->first('nom_hermanos'))
	<i>{{$errors->first('nom_hermanos')}}</i>
	@endif <br>
Nombre de los hermanos<input type ='text' name = 'nom_hermanos' value="{{old('nom_hermanos')}}">
<br>
@if($errors->first('edad'))
	<i>{{$errors->first('edad')}}</i>
	@endif <br>
Edad<input type ='text' name ='edad' value="{{old('edad')}}">
<br>
@if($errors->first('tipo_sangre'))
	<i>{{$errors->first('tipo_sangre')}}</i>
	@endif <br>
Tipo de sangre<input type ='text' name ='tipo_sangre' value="{{old('tipo_sangre')}}">
<br>
@if($errors->first('contacto1'))
	<i>{{$errors->first('contacto1')}}</i>
	@endif <br>
Primer contacto<input type ='text' name ='contacto1' value="{{old('contacto1')}}">
<br>
@if($errors->first('tel1'))
	<i>{{$errors->first('tel1')}}</i>
	@endif <br>
Numero<input type ='text' name ='tel1' value="{{old('tel1')}}">
<br>
@if($errors->first('contacto2'))
	<i>{{$errors->first('contacto2')}}</i>
	@endif <br>
Segundo contacto<input type ='text' name ='contacto2' value="{{old('contacto2')}}">
<br>
@if($errors->first('tel2'))
	<i>{{$errors->first('tel2')}}</i>
	@endif <br>
Numero<input type ='text' name ='tel2' value="{{old('tel2')}}">
<br>
@if($errors->first('contacto3'))
	<i>{{$errors->first('contacto3')}}</i>
	@endif <br>
Tercer contacto<input type ='text' name ='contacto3' value="{{old('contacto3')}}">
<br>
@if($errors->first('tel3'))
	<i>{{$errors->first('tel3')}}</i>
	@endif <br>
Numero<input type ='text' name ='tel3' value="{{old('tel3')}}">
<br>
<br>
<input type = 'submit' value = 'Guardar'>
<br>
</form>
@stop