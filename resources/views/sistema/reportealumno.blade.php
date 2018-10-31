@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Alumnos</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Edad</th>
                        <th>Curp</th>
                        <th>Email</th>
                        <th>Grado</th>
                        <th>Semestre</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Calle</th>
                        <th>Num. Interior</th>
                        <th>Num. Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Lugar Nacimiento</th>
                        <th>Día</th>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Ciclo Escolar</th>
                        <th>Responsable</th>
                        <th>Acta Nacimiento</th>
                        <th>Foto</th>
                        <th>Certificado Secundaria</th>
                        <th>Ficha Pago</th>
                        <th>Operaciones</th>
                        @foreach($alumnos as $al)
                    
                </thead>
                <tbody>
                    <tr>
                        <td>{{$al->ida}}</td>
                        <td>{{$al->nombre}}</td>
                        <td>{{$al->ap_pat}}</td>
                        <td>{{$al->ap_mat}}</td>
                        <td>{{$al->edad}}</td>
                        <td>{{$al->curp}}</td>
                        <td>{{$al->email}}</td>
                        <td>{{$al->grado}}</td>
                        <td>{{$al->semestre}}</td>
                        <td>{{$al->telefono}}</td>
                        <td>{{$al->estado}}</td>
                        <td>{{$al->municipio}}</td>
                        <td>{{$al->calle}}</td>
                        <td>{{$al->num_int}}</td>
                        <td>{{$al->num_ext}}</td>
                        <td>{{$al->colonia}}</td>
                        <td>{{$al->localidad}}</td>
                        <td>{{$al->cp}}</td>
                        <td>{{$al->lugar_nac}}</td>
                        <td>{{$al->dia}}</td>
                        <td>{{$al->mes}}</td>
                        <td>{{$al->año}}</td>
                        <td>{{$al->ciclo_escolar}}</td>
                        <td>{{$al->responsable}}</td>
                        <td><img src ="{{asset('archivos/'.$al->act_nac)}}" height = 60 width = 60></td>
                        <td><img src ="{{asset('archivos/'.$al->fich_pago)}}" height = 60 width = 60></td>
                        <td><img src ="{{asset('archivos/'.$al->foto)}}" height = 60 width = 60></td>
                        <td><img src ="{{asset('archivos/'.$al->cert_sec)}}" height = 60 width = 60></td>
                        <td>
                            @if($al->deleted_at =="")
                            <a href="#" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('alumno@eliminaalum',['ida'=>$al->ida])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='Eliminar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('alumno@restauraalum',['ida'=>$al->ida])}}" class="opt"> 
                               <i class='fa fa-history' title='Restaurar'></i> 
                            </a>
                            @endif
                        </td>  
                        @endforeach
                    </tr>
                <tfoot>
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Edad</th>
                        <th>Curp</th>
                        <th>Email</th>
                        <th>Grado</th>
                        <th>Semestre</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Municipio</th>
                        <th>Calle</th>
                        <th>Num. Interior</th>
                        <th>Num. Exterior</th>
                        <th>Colonia</th>
                        <th>Localidad</th>
                        <th>Codigo Postal</th>
                        <th>Lugar Nacimiento</th>
                        <th>Día</th>
                        <th>Mes</th>
                        <th>Año</th>
                        <th>Ciclo Escolar</th>
                        <th>Responsable</th>
                        <th>Acta Nacimiento</th>
                        <th>Foto</th>
                        <th>Certificado Secundaria</th>
                        <th>Ficha Pago</th>
                        <th>Operaciones</th>
                    </tr>
                </tfoot>
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop