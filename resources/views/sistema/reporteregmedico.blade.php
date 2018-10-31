@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Registros Medicos</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
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
                        @foreach($rmedico as $me)
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
                            @if($me->deleted_at =="")
                            <a href="#" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('medico@eliminaregmedico',['idrm'=>$me->idrm])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='Eliminar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('medico@restauraregmedico',['idrm'=>$me->idrm])}}" class="opt"> 
                               <i class='fa fa-history' title='Restaurar'></i> 
                            </a>
                            @endif
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
</div>
@stop