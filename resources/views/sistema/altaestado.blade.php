@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Estado</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <form action="{{route('guardaestado')}}" class="form p-t-20" method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('ide'))
                        <i>{{$errors->first('ide')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Clave Estado</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
                                <input type = 'text' class="form-control" name = 'ide' value="{{$idest}}" readonly="readonly">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('nombre'))
                        <i>{{$errors->first('nombre') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Nombre</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}">
                        </div>
                    </div>
                </div>
            </div>
            <button type='submit' class="btn btn-success  btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
            <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button>
        </form>
    </div>
</div>
@stop