@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Municipios</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Operaciones</th>
                        @if(count($municipio) > 0)
                        @foreach($municipio as $mun)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$mun->idm}}</td>
                        <td>{{$mun->nombre}}</td>
                        <td>{{$mun->estad}}</td>
                        
                        <td>
                            @if($mun->deleted_at =="")
                            <a href="{{URL::action('municipio@modificamun',['idm'=>$mun->idm])}}" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('municipio@eliminamun',['idm'=>$mun->idm])}}" class="opt">
                                <i class='fa fa-ban fa-lg fa-fw' title='Inhabilitar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('municipio@restauramun',['idm'=>$mun->idm])}}" class="opt"> 
                                <i class='fa fa-reply-all' title='Restaurar'></i> 
                            </a>
                            <a href="{{URL::action('municipio@efisicamun',['idm'=>$mun->idm])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='eliminar'></i>
                            </a>
                            @endif
                        </td>
                        @endforeach
                        @endif
                    </tr>
                <!--
                <tfoot> 
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Estado</th>
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