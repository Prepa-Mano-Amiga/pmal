@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Municipio</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <form action="{{route('guardamun')}}" class="form p-t-20" method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
                @if($errors->first('idm'))
                    <i>{{$errors->first('idm')}}</i>
                @endif
                <div class="form-group">
                  <label for="exampleInputuname">Clave Municio</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-key"></i></div>
                      <input type="text"  class="form-control" name = 'idm' value="{{$idmun}}" readonly="readonly">
                  </div>
                </div>
            
            <div class="row">
              <div class="col-lg-6">
                @if($errors->first('nombre'))
                  <i>{{$errors->first('nombre') }}</i>
                @endif
                <div class="form-group">
                  <label for="exampleInputuname">Nombre</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                      <input type="text" class="form-control" name="nombre" value="{{old('nombre')}}"><br>
                  </div> 
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <label for="exampleInputuname">Seleccione Estado</label>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                      <Select class="form-control" name='ide'>
                        @foreach($estados as $es)
                          <option value = '{{$es->ide}}'>{{$es->nombre}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <button type='submit' class="btn btn-success  btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
              <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button>
        </form >
    </div>
</div>
@stop
