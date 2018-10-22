@extends('sistema.principal')

@section('contenido')
<div class="box">
<head><title>Alta Estado</title></head>
    <h1>Alta Estado</h1><br>
    <form action='{{route('guardaestado')}}' method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        
        @if($errors->first('ide'))
	        <i>{{$errors->first('ide')}}</i>
	    @endif <br>
        Clave Estado <input type = 'text' name = 'ide' value="{{$idest}}" readonly="readonly">
        <br>
        @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif<br>
        Nombre: <br><input type="text" name="nombre" value="{{old('nombre')}}"><br>
        
        <input type="submit" name="Guardar" value="Guardar">
    </form>
    </div>
@stop