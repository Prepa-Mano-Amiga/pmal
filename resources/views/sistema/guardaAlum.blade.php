@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Modificacion Alumnos</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
            <form class="form p-t-20" action = '{{route('editAlum')}}' method='POST' enctype='multipart/form-data'>
                {{csrf_field()}}
                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('ida'))
                        <i>{{$errors->first('ida')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Clave</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-key"></i></div>
                                    <input type = 'text' class="form-control" name = 'ida' id="exampleInputuname" value="{{$alum->ida}}" readonly="readonly"> 
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('nombre'))
                        <i>{{$errors->first('nombre')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Nombre</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type ='text' class="form-control" name = 'nombre' value="{{$alum->nombre}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('ap_pat'))
                        <i>{{$errors->first('ap_pat')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Apellido Paterno</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type ='text' class="form-control" name = 'ap_pat' value="{{$alum->ap_pat}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('ap_mat'))
                        <i>{{$errors->first('ap_mat')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Apellido Materno</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type ='text' class="form-control" name = 'ap_mat' value="{{$alum->ap_mat}}" >
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('edad'))
                        <i>{{$errors->first('edad')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Edad</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type='text' class="form-control" name='edad' value="{{$alum->edad}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="exampleInputuname">Sexo</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                @if($alum->sexo=="F")
                                    <input type = 'radio' name = 'sexo' value ='M'>M
                                    <input type = 'radio' name ='sexo' value ='F' checked >F
                                @else
                                    <input type = 'radio' name = 'sexo' value ='M' checked >M
                                    <input type = 'radio' name ='sexo' value ='F' >F
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('curp'))
                        <i>{{$errors->first('curp')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">CURP</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                    <input type ='text' class="form-control" name='curp' value="{{$alum->curp}}">
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-lg-6">
                        @if($errors->first('email'))
                        <i>{{$errors->first('email')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Email</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                    <input type ='text' class="form-control" name='email' value="{{$alum->email}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        @if($errors->first('grado'))
                        <i>{{$errors->first('grado')}}</i>
                        @endif 
                        <div class="form-group">
                            <label for="exampleInputuname">Grado</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-book"></i></div>
                                    <input type ='text' class="form-control" name='grado' value="{{$alum->grado}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @if($errors->first('semestre'))
                        <i>{{$errors->first('semestre')}}</i>
                        @endif 
                        <div class="form-group">
                            <label for="exampleInputuname">Semestre </label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-book"></i></div>
                                    <input type ='text' class="form-control" name='semestre' value="{{$alum->semestre}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @if($errors->first('ciclo_escolar'))
                        <i>{{$errors->first('ciclo_escolar')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Ciclo Escolar</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-book"></i></div>
                                    <input type ='text' class="form-control" name='ciclo_escolar' value="{{$alum->ciclo_escolar}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('telefono'))
                        <i>{{$errors->first('telefono')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Telefono </label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-mobile"></i></div>
                                    <input type ='text' class="form-control" name='telefono' value="{{$alum->telefono}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('calle'))
                        <i>{{$errors->first('calle')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Calle</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name='calle' value="{{$alum->calle}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        @if($errors->first('num_int'))
                        <i>{{$errors->first('num_int')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Numero Interior</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name='num_int' value="{{$alum->num_int}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @if($errors->first('num_ext'))
                        <i>{{$errors->first('num_ext')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname"> Numero exterior</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name='num_ext' value="{{$alum->num_ext}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        @if($errors->first('cp'))
                        <i>{{$errors->first('cp')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Codigo Postal</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name ='cp' value="{{$alum->cp}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('colonia'))
                        <i>{{$errors->first('colonia')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Colonia</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name='colonia' value="{{$alum->colonia}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('localidad'))
                        <i>{{$errors->first('localidad')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Localidad</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name='localidad' value="{{$alum->localidad}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        @if($errors->first('lugar_nac'))
                        <i>{{$errors->first('lugar_nac')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Lugar de Nacimietno</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <input type ='text' class="form-control" name ='lugar_nac' value="{{$alum->lugar_nac}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        @if($errors->first('dia'))
                        <i>{{$errors->first('dia')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Día</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                    <input type ='text' class="form-control" name ='dia' value="{{$alum->dia}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        @if($errors->first('mes'))
                        <i>{{$errors->first('mes')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Mes</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                    <input type ='text' class="form-control" name ='mes' value="{{$alum->mes}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        @if($errors->first('año'))
                        <i>{{$errors->first('año')}}</i>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputuname">Año</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-calendar"></i></div>
                                    <input type ='text' class="form-control" name ='año' value="{{$alum->año}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        @if($errors->first('act_nac'))
                        <i>{{$errors->first('act_nac')}}</i>
                        @endif
                        <div class="form-group">
                                Acta de Nacimiento <br>
                                <img src ="{{asset('archivos/'.$alum->act_nac)}}" height = 150 width = 150><br>
                            <label for="exampleInputuname">Seleccione acta de nacimiento </label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-cloud-up"></i></div>
                                    
                                    <input type='file' class="form-control" name = 'act_nac'>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('fich_pago'))
                        <i>{{$errors->first('fich_pago')}}</i>
                        @endif
                        <div class="form-group">
                               Ficha de pago<br> 
                               <img src ="{{asset('archivos/'.$alum->fich_pago)}}" height = 150 width = 150 aling='center'><br>
                            <label for="exampleInputuname">Seleccione ficha de pago</label>  
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-cloud-up"></i></div>
                                   <input type='file' class="form-control" name='fich_pago'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                    @if($errors->first('foto'))
                    <i>{{$errors->first('foto')}}</i>
                    @endif
                    <div class="form-group">
                                Foto<br>
                                <img src ="{{asset('archivos/'.$alum->foto)}}" height = 150 width = 150><br>
                            <label for="exampleInputuname">Seleccione Foto</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-cloud-up"></i></div>
                                    <input type='file' class="form-control" name='foto'>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        @if($errors->first('cert_sec'))
                        <i>{{$errors->first('cert_sec')}}</i>
                        @endif
                        <div class="form-group">
                                Certificado de Secundaria<br>
                                <img src ="{{asset('archivos/'.$alum->cert_sec)}}" height = 150 width = 150><br>
                            <label for="exampleInputuname">Seleccione certificado de secundaria</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-cloud-up"></i></div>
                                    <input type='file' class="form-control" name='cert_sec'>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputuname">Seleccione escuela de procedencia</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                <Select class="form-control" name='ides'>
                                    <option value='{{$ides}}'>{{$esc}}</option>
                                    @foreach ($allesc as $aes)
                                    <option value='{{$aes->ides}}'>{{$aes->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputuname">Seleccione registro medico</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-support"></i></div>
                                    <Select class="form-control" name='idrm'>
                                        <option value='{{$idrm}}'>{{$rm}}</option>
					                    @foreach ($allrm as $arm)
                                        <option value='{{$arm->idrm}}'>{{$arm->responsable}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="exampleInputuname">Seleccione municipio</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-location-pin"></i></div>
                                    <Select class="form-control" name='idm'>
                                        <option value='{{$idm}}'>{{$mun}}</option>
                                        @foreach ($allmun as $am)
                                        <option value='{{$am->idm}}'>{{$am->nombre}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                </div><br><br>

                <button type='submit' class="btn btn-success  btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
                <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button>
            </form>
    </div>
</div>
@stop
