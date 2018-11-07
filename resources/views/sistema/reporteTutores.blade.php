@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Tutores.</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
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
                        <th>Municipio</th>
                        <th>Calle</th>
                        <th>Numero Interior</th>
                        <th>Numero Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Nombre del alumno</th>
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
                        <td>{{$tu->municipio}}</td>
                        <td>{{$tu->calle}}</td>
                        <td>{{$tu->num_int}}</td>
                        <td>{{$tu->num_ext}}</td>
                        <td>{{$tu->colonia}}</td>
                        <td>{{$tu->localidad}}</td>
                        <td>{{$tu->cp}}</td>
                        <td>{{$tu->alumno}}</td>
                        <td>
                            @if($tu->deleted_at =="")
                            <a href="{{URL::action('tutor@modificaTutor',['idt'=>$tu->idt])}}" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('tutor@eliminatutor',['idt'=>$tu->idt])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='Eliminar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('tutor@restauratutor',['idt'=>$tu->idt])}}" class="opt"> 
                               <i class='fa fa-history' title='Restaurar'></i> 
                            </a>
                            @endif
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
                        <th>Municipio</th>
                        <th>Calle</th>
                        <th>Numero Interior</th>
                        <th>Numero Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Nombre del alumno</th>
                        <th>Operaciones</th>
                        </tr>
                  </tfoot>
                </tbody>
            </table>
        </div>
    </div>
</div>     
@stop