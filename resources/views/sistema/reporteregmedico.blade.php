@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Registros Medicos</h1>
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
                        <th>Responsable</th>
                        <th>Numero de hermanos</th>
                        <th>Nombre de hermanos</th>
                        <th>Edad</th>
                        <th>Tipo de sangre</th>
                        <th>Contacto1</th>
                        <th>tel1</th>
                        <th>Contacto2</th>
                        <th>tel2</th>
                        <th>Contacto3</th>
                        <th>tel3</th>
                        <th>Operaciones</th>
                        @foreach($medico as $me)
                    </tr>
                </thead>
                <tbody>
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
                        <th>Responsable</th>
                        <th>Numero de hermanos</th>
                        <th>Nombre de hermanos</th>
                        <th>Edad</th>
                        <th>Tipo de sangre</th>
                        <th>Contacto1</th>
                        <th>tel1</th>
                        <th>Contacto2</th>
                        <th>tel2</th>
                        <th>Contacto3</th>
                        <th>tel3</th>
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