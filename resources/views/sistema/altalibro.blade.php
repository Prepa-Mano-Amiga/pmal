@extends('sistema.principal')

@section('contenido')
<h1> Alta de Libro </h1>
<br>
<form action ="{{route('guardalibro')}}"  method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idl'))
	<i>{{$errors->first('idl')}}</i>
	@endif <br>
	
Clave libro <input type = 'text' name = 'idl' value="{{$idl}}" readonly="readonly">
<br>
	@if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif <br>
 Nombre del libro <input type = 'text' name = 'nombre' value="{{old('nombre')}}" >
<br>
	@if($errors->first('autor'))
	<i>{{$errors->first('autor')}}</i>
	@endif <br>
Autor <input type = 'text' name = 'autor' value="{{old('autor')}}">
<br>
@if($errors->first('clasificacion'))
	<i>{{$errors->first('clasificacion')}}</i>
	@endif <br>
Clasificación <input type ='text'  name = 'clasificacion' value="{{old('clas')}}">
<br>
@if($errors->first('existencias'))
	<i>{{$errors->first('existencias')}}</i>
	@endif <br>
Existencias<input type ='text' name ='existencias' value="{{old('exis')}}">
<br>
@if($errors->first('codigo'))
	<i>{{$errors->first('codigo')}}</i>
	@endif <br>
Codigo<input type ='text' name ='codigo' value="{{old('codigo')}}">
<br>
Disponible <input type = 'radio' name = 'disponible' value = 'No' checked >no
<input type = 'radio' name = 'disponible' value = 'Si'>si
<br>
@if($errors->first('archivo')) 
<i> {{ $errors->first('archivo') }} </i> 
@endif	<br>
Seleccione foto<input type= 'file' name = 'archivo'>
<br>
<input type="submit" name="Guardar" value="Guardar">
</form>
@stop