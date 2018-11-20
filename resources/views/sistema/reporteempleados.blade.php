@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Empleados</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Turno</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Operaciones</th>
                        @foreach($empleado as $bem)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$bem->idbe}}</td>
                        <td>{{$bem->nombre}}</td>
                        <td>{{$bem->ap_pat}}</td>
                        <td>{{$bem->ap_mat}}</td>
                        <td>{{$bem->turno}}</td>
                        <td>{{$bem->correo}}</td>
                        <td>{{$bem->telefono}}</td>
                        <td>
                            @if($bem->deleted_at =="")
                            <a href="{{URL::action('empleado@modificaempleado',['idbe'=>$bem->idbe])}}" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('empleado@eliminaempleado',['idbe'=>$bem->idbe])}}" class="opt">
                                <i class='fa fa-ban fa-lg fa-fw' title='Inhabilitar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('empleado@restauraempleado',['idbe'=>$bem->idbe])}}" class="opt"> 
                                <i class='fa fa-reply-all' title='Restaurar'></i> 
                            </a>
                            <a href="{{URL::action('empleado@efisicae',['idbe'=>$bem->idbe])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='eliminar'></i>
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
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Turno</th>
                        <th>Correo</th>
                        <th>Telefono</th>
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