@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Escuelas</h1>
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
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Ocupacion</th>
                        <th>Compañia</th>
                        <th>Curp</th>
                        <th>Grado de Estudios</th>
                        <th>Email</th>
                        <th>Calle</th>
                        <th>Numero Interior</th>
                        <th>Numero Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Operaciones</th>
                        @foreach($tutores as $tu)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$tu->idt}}</td>
                        <td>{{$tu->nombre}}</td>
                        <td>{{$tu->ap_pat}}</td>
                        <td>{{$tu->ap_mat}}</td>
                        <td>{{$tu->fec_nac}}</td>
                        <td>{{$tu->ocupacion}}</td>
                        <td>{{$tu->compañia}}</td>
                        <td>{{$tu->curp}}</td>
                        <td>{{$tu->grado_estudios}}</td>
                        <td>{{$tu->email}}</td>
                        <td>{{$tu->calle}}</td>
                        <td>{{$tu->num_int}}</td>
                        <td>{{$tu->num_ext}}</td>
                        <td>{{$tu->colonia}}</td>
                        <td>{{$tu->localidad}}</td>
                        <td>{{$tu->cp}}</td>
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
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Ocupacion</th>
                            <th>Compañia</th>
                            <th>Curp</th>
                            <th>Grado de Estudios</th>
                            <th>Email</th>
                            <th>Calle</th>
                            <th>Numero Interior</th>
                            <th>Numero Exterior</th>
                            <th>Colonia</th>
                            <th>Localidad</th>
                            <th>Codigo Postal</th>
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