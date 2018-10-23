@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Alumnos</h1>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Reporte Escuelas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Edad</th>
                        <th>Curp</th>
                        <th>Email</th>
                        <th>Grado</th>
                        <th>Semestre</th>
                        <th>Telefono</th>
                        <th>Calle</th>
                        <th>Num. Interior</th>
                        <th>Num. Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Lugar Nacimiento</th>
                        <th>Día</th>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Ciclo Escolar</th>
                        <th>Acta Nacimiento</th>
                        <th>Foto</th>
                        <th>Certificado Secundaria</th>
                        <th>Ficha Pago</th>
                        <th>Operaciones</th>
                        @foreach($alumnos as $al)
                    
                </thead>
                <tbody>
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
                        <td>
                            <a href="#">
                                <i class='fa fa-pencil-alt fa-lg fa-fw' tittle='modificar'></i>
                            </a>
                            <a href="#">
                                <i class='fa fa-trash fa-lg fa-fw'></i>
                            </a>
                        </td>  
                        @endforeach
                    </tr>
                <tfoot>
                    <th>Clave</th>
                    <th>Nombre</th>
                    <th>Ap. Paterno</th>
                    <th>Ap. Materno</th>
                    <th>Edad</th>
                    <th>Curp</th>
                    <th>Email</th>
                    <th>Grado</th>
                    <th>Semestre</th>
                    <th>Telefono</th>
                    <th>Calle</th>
                    <th>Num. Interior</th>
                    <th>Num. Exterior</th>
                    <th>Colonia</th>
                    <th>Localidad</th>
                    <th>Codigo Postal</th>
                    <th>Lugar Nacimiento</th>
                    <th>Día</th>
                    <th>Mes</th>
                    <th>Año</th>
                    <th>Ciclo Escolar</th>
                    <th>Acta Nacimiento</th>
                    <th>Foto</th>
                    <th>Certificado Secundaria</th>
                    <th>Ficha Pago</th>
                    <th>Operaciones</th>
                    </tr>
                </tfoot>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
@stop