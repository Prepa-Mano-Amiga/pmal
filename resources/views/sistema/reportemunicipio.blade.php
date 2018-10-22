@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Municipios</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>Estado</td>
    <td>Operaciones</td>
    @foreach($municipio as $mun)
<tr>
    <td>{{$mun->idm}}</td>
    <td>{{$mun->nombre}}</td>
    <td>{{$mun->ide}}</td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
@stop