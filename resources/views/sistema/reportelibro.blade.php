@extends('sistema.principalTable')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Reporte Libro</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <div class="table-responsive m-t-40">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Nombre del libro</th>
                        <th>Autor</th>
                        <th>Clasificación</th>
                        <th>Existencias</th>
                        <th>Codigo</th>
                        <th>Disponible</th>
                        <th>Archivo</th>
                        <th>Operaciones</th>
                        @foreach($libro as $lib)
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$lib->idl}}</td>
                        <td>{{$lib->nombre}}</td>
                        <td>{{$lib->autor}}</td>
                        <td>{{$lib->clasificacion}}</td>
                        <td>{{$lib->existencias}}</td>
                        <td>{{$lib->codigo}}</td>
                        <td>{{$lib->disponible}}</td>
                        <td><img src = "{{asset('archivos/'.$lib->archivo)}}"
                            height =50 width=50></td>
                        <td>
                            @if($lib->deleted_at =="")
                            <a href="{{URL::action('libro@modificalibro',['idl'=>$lib->idl])}}" class="opt">
                                <i class='fa fa-pencil fa-lg fa-fw' title='Modificar'></i>
                            </a>
                            
                            <a href="{{URL::action('libro@eliminalibro',['idl'=>$lib->idl])}}" class="opt">
                                <i class='fa fa-trash fa-lg fa-fw' title='Eliminar'></i>
                            </a>
                            @else
                            <a href="{{URL::action('libro@restauralibro',['idl'=>$lib->idl])}}" class="opt"> 
                               <i class='fa fa-history' title='Restaurar'></i> 
                            </a>
                            @endif
                        </td>
                        @endforeach
                    </tr> 
                <tfoot> 
                    <tr>
                        <th>Clave</th>
                        <th>Nombre del libro</th>
                        <th>Autor</th>
                        <th>Clasificación</th>
                        <th>Existencias</th>
                        <th>Codigo</th>
                        <th>Disponible</th>
                        <th>Archivo</th>
                        <th>Operaciones</th>
                    </tr>
                </tfoot>
                </tbody>
            </table>
        </div>
    </div>
</div>     
    
</table>
@stop