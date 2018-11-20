@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Tutor</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
        <form action='{{route('guardaTutor')}}' class="form p-t-20" method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('idt'))
                        <i>{{$errors->first('idt')}}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Clave de Tutor</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
                                <input type="text"  class="form-control" name = 'idt' value="{{$idtu}}" readonly="readonly">
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
                    @if($errors->first('ap_pat'))
                        <i>{{$errors->first('ap_pat') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Apellido Paterno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control" name="ap_pat" value="{{old('ap_pat')}}">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('ap_mat'))
                        <i>{{$errors->first('ap_mat') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Apellido Materno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control" name="ap_mat" value="{{old('ap_mat')}}">
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('fec_nac'))
                        <i>{{$errors->first('fec_nac') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Fecha De Nacimiento</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                <input type="date" class="form-control" name="fec_nac" value="{{old('fec_nac')}}">
                        </div>
                    </div>
				</div>
                
                <div class="col-lg-6">
                    @if($errors->first('ocupacion'))
                        <i>{{$errors->first('ocupacion') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Ocupacion</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-bag"></i></div>
                                <input type="text" class="form-control" name="ocupacion" value="{{old('ocupacion')}}">
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('compañia'))
                        <i>{{$errors->first('compañia') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Compañia</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-home"></i></div>
                                <input type="text" class="form-control" name="compañia" value="{{old('compañia')}}">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('curp'))
                        <i>{{$errors->first('curp') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">CURP</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="text" class="form-control"  name="curp" value="{{old('curp')}}">
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('grado_estudios'))
                        <i>{{$errors->first('grado_estudios') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Grado de Estudios</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>
                                <input type="text" class="form-control" name="grado_estudios" value="{{old('grado_estudios')}}">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('email'))
                        <i>{{$errors->first('email') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Email</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-email"></i></div>
                                <input type="text" class="form-control" name="email" value="{{old('email')}}">
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('calle'))
                        <i>{{$errors->first('calle') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Calle</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="calle" value="{{old('calle')}}">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('num_int'))
                        <i>{{$errors->first('num_int') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Numero Interior</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="num_int" value="{{old('num_int')}}">
                        </div>
                    </div>
				</div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    @if($errors->first('num_ext'))
                        <i>{{$errors->first('num_ext') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Numero Exterior</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="num_ext" value="{{old('num_ext')}}">
                        </div>
                    </div>
				</div>

                <div class="col-lg-6">
                    @if($errors->first('colonia'))
                        <i>{{$errors->first('colonia') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Colonia</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="colonia" value="{{old('colonia')}}">
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
                    @if($errors->first('cp'))
                        <i>{{$errors->first('cp') }}</i>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputuname">Codigo Postal</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                <input type="text" class="form-control" name="cp" value="{{old('cp')}}">
                        </div>
                    </div>
				</div>
            </div>

            <div class="row">
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

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="exampleInputuname">Seleccione Alumno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
                            <Select class="form-control" name='ida'>
                                @foreach($alumnos as $alum)
                                    <option value = '{{$alum->ida}}'>{{$alum->nombre}}</option>
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