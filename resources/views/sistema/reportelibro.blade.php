@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Libros</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Nombre del libro</td>
    <td>Autor</td>
    <td>Clasificación</td>
    <td>Existencias</td>
    <td>Codigo</td>
    <td>Disponible</td>
    <td>Archivo</td>
    @foreach($libro as $lib)
<tr>
    <td>{{$lib->idl}}</td>
    <td>{{$lib->nombre}}</td>
    <td>{{$lib->autor}}</td>
    <td>{{$lib->clasificacion}}</td>
    <td>{{$lib->existencias}}</td>
    <td>{{$lib->codigo}}</td>
    <td>{{$lib->disponible}}</td>
    <td><img src = "{{asset('archivos/'.$lib->archivo)}}"
        height =50 width=50></td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
@stop