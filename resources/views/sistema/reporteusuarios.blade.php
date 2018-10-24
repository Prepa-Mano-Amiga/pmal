@extends('sistema.principal')

@section('contenido')
<h1>Reporte de usuarios</h1>
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Tipo Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Operaciones</th>
                        @foreach($usuarios as $us)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$us->idu}}</td>
                        <td>{{$us->usuario}}</td>
                        <td>{{$us->password}}</td>
                        <td>{{$us->tipo_usu}}</td>
                        <td>{{$us->nombre}}</td>
                        <td>{{$us->ap_pat}}</td>
                        <td>{{$us->ap_mat}}</td>
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
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Tipo Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
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