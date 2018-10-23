@extends('sistema.principal')

@section('contenido')
    <h1>Reporte de Alumnos</h1>
    <br>
<table  border=1>
    <tr>
        <td>Clave</td>
        <td>Nombre</td>
        <td>Ap. Paterno</td>
        <td>Ap. Materno</td>
        <td>Edad</td>
        <td>Curp</td>
        <td>Email</td>
        <td>Grado</td>
        <td>Semestre</td>
        <td>Telefono</td>
        <td>Calle</td>
        <td>Num. Interior</td>
        <td>Num. Exterior</td>
        <td>Colonia</td>
        <td>Localidad</td>
        <td>Codigo Postal</td>
        <td>Lugar Nacimiento</td>
        <td>Día</td>
        <td>Mes</td>
        <td>Año</td>
        <td>Ciclo Escolar</td>
        <td>Acta Nacimiento</td>
        <td>Foto</td>
        <td>Certificado Secundaria</td>
        <td>Ficha Pago</td>
        <td>Operaciones</td>
    @foreach($alumnos as $al)
    <tr>
        <td>{{$al->idm}}</td>
        <td>{{$al->nombre}}</td>
        <td>{{$al->ap_pat}}</td>
        <td>{{$al->ap_mat}}</td>
        <td>{{$al->edad}}</td>
        <td>{{$al->curp}}</td>
        <td>{{$al->email}}</td>
        <td>{{$al->grado}}</td>
        <td>{{$al->semestre}}</td>
        <td>{{$al->telefono}}</td>
        <td>{{$al->calle}}</td>
        <td>{{$al->num_int}}</td>
        <td>{{$al->num_ext}}</td>
        <td>{{$al->colonia}}</td>
        <td>{{$al->localidad}}</td>
        <td>{{$al->cp}}</td>
        <td>{{$al->lugar_nac}}</td>
        <td>{{$al->dia}}</td>
        <td>{{$al->mes}}</td>
        <td>{{$al->año}}</td>
        <td>{{$al->ciclo_escolar}}</td>
        <td><img src ="{{asset('archivos/'.$al->act_nac)}}" height = 60 width = 60></td>
        <td><img src ="{{asset('archivos/'.$al->fich_pago)}}" height = 60 width = 60></td>
        <td><img src ="{{asset('archivos/'.$al->foto)}}" height = 60 width = 60></td>
        <td><img src ="{{asset('archivos/'.$al->cert_sec)}}" height = 60 width = 60></td>
        <td><a href="#">Eliminar </a>
        <a href="#">Modificar</a></td>
    </tr>  
    @endforeach
</table>
@stop