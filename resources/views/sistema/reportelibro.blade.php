@extends('sistema.principal')

@section('contenido')
<h1>Reporte de Libros</h1>
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
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>     
    
</table>
@stop