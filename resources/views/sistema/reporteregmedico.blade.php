@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Registros Medicos</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Responsable</td>
    <td>Numero de hermanos</td>
    <td>Nombre de hermanos</td>
    <td>Edad</td>
    <td>Tipo de sangre</td>
    <td>Contacto1</td>
    <td>tel1</td>
    <td>Contacto2</td>
    <td>tel2</td>
    <td>Contacto3</td>
    <td>tel3</td>
    @foreach($medico as $me)
<tr>
    <td>{{$me->idrm}}</td>
    <td>{{$me->responsable}}</td>
    <td>{{$me->num_hermanos}}</td>
    <td>{{$me->nom_hermanos}}</td>
    <td>{{$me->edad}}</td>
    <td>{{$me->tipo_sangre}}</td>
    <td>{{$me->contacto1}}</td>
    <td>{{$me->tel1}}</td>
    <td>{{$me->contacto2}}</td>
    <td>{{$me->tel2}}</td>
    <td>{{$me->contacto3}}</td>
    <td>{{$me->tel3}}</td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
@stop