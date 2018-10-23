@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Empleados</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>Apellido paterno</td>
    <td>Apellido materno</td>
    <td>Turno</td>
    <td>Correo</td>
    <td>Telefono</td>
    @foreach($empleado as $bem)
<tr>
    <td>{{$bem->idbe}}</td>
    <td>{{$bem->nombre}}</td>
    <td>{{$bem->ap_pat}}</td>
    <td>{{$bem->ap_mat}}</td>
    <td>{{$bem->turno}}</td>
    <td>{{$bem->correo}}</td>
    <td>{{$bem->telefono}}</td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
@stop