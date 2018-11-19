@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Usuarios.</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Tipo Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Foto </th>
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
                        <td><img src ="{{asset('archivos/'.$us->foto)}}" height = 60 width = 60></td>
                        <td>
                            @if($us->deleted_at =="")
                            <a href="{{URL::action('usuario@modificausuario',['idu'=>$us->idu])}}" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('usuario@eliminausuario',['idu'=>$us->idu])}}" class="opt">
                                <i class='fa fa-ban fa-lg fa-fw' title='Inhabilitar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('usuario@restaurausuario',['idu'=>$us->idu])}}" class="opt"> 
                               <i class='fa fa-history' title='Restaurar'></i> 
                            </a>
                            <a href="{{URL::action('usuario@efisicau',['idu'=>$us->idu])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='eliminar'></i>
                            </a>
                            @endif
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
</div>     
@stop