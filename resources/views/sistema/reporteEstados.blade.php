@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Estados</h1>
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
                        <th>Operaciones</th>
                        @foreach($estados as $es)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$es->ide}}</td>
                        <td>{{$es->nombre}}</td>
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