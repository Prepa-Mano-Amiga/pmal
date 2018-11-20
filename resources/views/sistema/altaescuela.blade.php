@extends('sistema.principal')

@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Escuela</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <form action='{{route('guardaescuela')}}' class="form p-t-20" method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('ides'))
                        <i>{{$errors->first('ides')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Clave Escuela</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
                                <input type="text"  class="form-control" name = 'ides' value="{{$idec}}" readonly="readonly">
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

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('localidad'))
                        <i>{{$errors->first('localidad') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Localidad</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="localidad" value="{{old('localidad')}}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if($errors->first('sostenimiento'))
                        <i>{{$errors->first('sostenimiento') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Sostenimiento</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-money"></i></div>
                                <input type="text" class="form-control" name="sostenimiento" value="{{old('sostenimiento')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('fec_engre'))
                        <i>{{$errors->first('fec_engre') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Año De Egreso</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                <input type="text" class="form-control" name="fec_engre" value="{{old('fec_engre')}}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if($errors->first('promedio'))
                        <i>{{$errors->first('promedio') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Promedio</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-medall"></i></div>
                                <input type="text" class="form-control" name="promedio" value="{{old('promedio')}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('clave_sector'))
                        <i>{{$errors->first('clave_sector') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Clave de Sector</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-bookmark"></i></div>
                                <input type="text" class="form-control" name="clave_sector" value="{{old('clave_sector')}}">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                <div class="form-group">
                        <label for="exampleInputuname">Seleccione Municipio</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                            <Select class="form-control" name='idm'>
                                @foreach($municipios as $mun)
                                    <option value = '{{$mun->idm}}'>{{$mun->nombre}}</option>
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