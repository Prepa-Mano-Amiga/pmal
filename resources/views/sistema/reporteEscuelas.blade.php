@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Escuelas</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Localidad</th>
                        <th>Sostenimiento</th>
                        <th>Fecha de Egreso</th>
                        <th>Promedio</th>
                        <th>Clave de Sector</th>
                        <th>Municipio</th>
                        <th>Operaciones</th>
                        @foreach($escuelas as $es)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$es->ides}}</td>
                        <td>{{$es->nombre}}</td>
                        <td>{{$es->localidad}}</td>
                        <td>{{$es->sostenimiento}}</td>
                        <td>{{$es->fec_engre}}</td>
                        <td>{{$es->promedio}}</td>
                        <td>{{$es->clave_sector}}</td>
                        <td>{{$es->municipio}}</td>
                        <td>
                            @if($es->deleted_at =="")
                                <a href="{{URL::action('escuela@modificaEscuela',['ides'=>$es->ides])}}" class="opt">
                                    <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                                </a>
                                
                                <a href="{{URL::action('escuela@eliminaescuela',['ides'=>$es->ides])}}" class="opt">
                                    <i class='fa fa-toggle-on fa-lg fa-fw' title='Inhabilitar'></i>
                                </a>
                            @else
                                <a href="{{URL::action('escuela@restauraescuela',['ides'=>$es->ides])}}" class="opt"> 
                                    <i class='fa fa-toggle-off fa-lg fa-fw' title='Restaurar'></i> 
                                    <!--<i class='fa fa-reply-all' title='Restaurar'></i> -->
                                </a>
                                <a href="{{URL::action('escuela@efisicaes',['ides'=>$es->ides])}}" class="opt">
                                    <i class='fa fa-times fa-lg fa-fw' title='elimminar'></i>
                                </a>
                            @endif
                        </td>
                        @endforeach
                    </tr>
                <!--
                <tfoot>
                    <tr> 
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Localidad</th>
                        <th>Sostenimiento</th>
                        <th>Fecha de Egreso</th>
                        <th>Promedio</th>
                        <th>Clave de Sector</th>
                        <th>Municipio</th>
                        <th>Operaciones</th>
                    </tr>
                </tfoot>
                -->
                </tbody>
            </table>
        </div>
    </div>
</div>     
@stop