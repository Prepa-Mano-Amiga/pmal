@extends('sistema.principal')
@section('contenido')
<div class="box">
<h1> Alta de Alumnos </h1>
<br>
<form action = '{{route('guardaAlum')}}' method='POST' enctype='multipart/form-data'>
    {{csrf_field()}}

    @if($errors->first('ida'))
    <i>{{$errors->first('ida')}}</i>
    @endif <br>
	
        Clave Alumno <input type = 'text' name = 'ida' value="{{$idal}}" readonly="readonly"> 
    
    <br>
	
    @if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif <br>
        Nombre <input type ='text' name = 'nombre' value="{{old('nombre')}}" >
    <br>

    @if($errors->first('ap_pat'))
	<i>{{$errors->first('ap_pat')}}</i>
	@endif <br>
        Aoellido Paterno <input type ='text' name = 'ap_pat' value="{{old('ap_pat')}}" >
    <br>

    @if($errors->first('ap_mat'))
	<i>{{$errors->first('ap_mat')}}</i>
	@endif <br>
        Apellido Materno <input type ='text' name = 'ap_mat' value="{{old('ap_mat')}}" >
    <br>

	@if($errors->first('edad'))
	<i>{{$errors->first('edad')}}</i>
	@endif <br>
        Edad<input type = 'text' name = 'edad' value="{{old('edad')}}">
    <br><br>

    Sexo<input type = 'radio' name = 'sexo' value ='M' checked>M
        <input type = 'radio' name ='sexo' value ='F'>F
    <br>

    @if($errors->first('curp'))
	<i>{{$errors->first('curp')}}</i>
	@endif <br>
        Curp: <input type ='text' name = 'curp' value="{{old('curp')}}" >
    <br>

    @if($errors->first('email'))
	<i>{{$errors->first('email')}}</i>
	@endif <br>
        Email <input type ='text' name = 'email' value="{{old('email')}}" >
    <br>

    @if($errors->first('grado'))
	<i>{{$errors->first('grado')}}</i>
	@endif <br>
        Grado <input type ='text' name = 'grado' value="{{old('grado')}}" >
    <br>

    @if($errors->first('semestre'))
	<i>{{$errors->first('semestre')}}</i>
	@endif <br>
        Semestre <input type ='text' name = 'semestre' value="{{old('semestre')}}" >
    <br>

    @if($errors->first('telefono'))
	<i>{{$errors->first('telefono')}}</i>
	@endif <br>
        Telefono <input type ='text' name = 'telefono' value="{{old('telefono')}}" >
    <br>

    @if($errors->first('calle'))
	<i>{{$errors->first('calle')}}</i>
	@endif <br>
        Calle <input type ='text' name = 'calle' value="{{old('calle')}}" >
    <br>

    @if($errors->first('num_int'))
	<i>{{$errors->first('num_int')}}</i>
	@endif <br>
        Numero interior <input type ='text' name = 'num_int' value="{{old('num_int')}}" >
    <br>

    @if($errors->first('num_ext'))
	<i>{{$errors->first('num_ext')}}</i>
	@endif <br>
        Numero exterior <input type ='text' name = 'num_ext' value="{{old('num_ext')}}" >
    <br>

    @if($errors->first('colonia'))
	<i>{{$errors->first('colonia')}}</i>
	@endif <br>
        Colonia <input type ='text' name = 'colonia' value="{{old('colonia')}}" >
    <br>

    @if($errors->first('localidad'))
	<i>{{$errors->first('localidad')}}</i>
	@endif <br>
        Localidad<input type ='text' name = 'localidad' value="{{old('localidad')}}" >
    <br>

	@if($errors->first('cp'))
	<i>{{$errors->first('cp')}}</i>
	@endif <br>
        Codigo Postal <input type ='text' name ='cp' value="{{old('cp')}}">
    <br>

	@if($errors->first('lugar_nac'))
	<i>{{$errors->first('lugar_nac')}}</i>
	@endif <br>
        Lugar de Nacimietno<input type ='text' name ='lugar_nac' value="{{old('lugar_nac')}}">
    <br>

    @if($errors->first('dia'))
	<i>{{$errors->first('dia')}}</i>
	@endif <br>
        Día<input type ='text' name ='dia' value="{{old('dia')}}">
    <br>

    @if($errors->first('mes'))
	<i>{{$errors->first('mes')}}</i>
	@endif <br>
       Mes<input type ='text' name ='mes' value="{{old('mes')}}">
    <br>

    @if($errors->first('año'))
	<i>{{$errors->first('año')}}</i>
	@endif <br>
        Año<input type ='text' name ='año' value="{{old('año')}}">
    <br><br>

    @if($errors->first('ciclo_escolar'))
	<i>{{$errors->first('ciclo_escolar')}}</i>
	@endif <br>
        Ciclo Escolar<input type ='text' name ='ciclo_escolar' value="{{old('ciclo_escolar')}}">
    <br>

    @if($errors->first('act_nac'))
	<i>{{$errors->first('act_nac')}}</i>
	@endif <br>
        Seleccione acta de nacimiento <input type='file' name = 'act_nac'>
    <br>

     @if($errors->first('fich_pago'))
	<i>{{$errors->first('fich_pago')}}</i>
	@endif <br>
        Seleccione ficha de pago <input type='file' name = 'fich_pago'>
    <br>

     @if($errors->first('foto'))
	<i>{{$errors->first('foto')}}</i>
	@endif <br>
        Seleccione foto <input type='file' name = 'foto'>
    <br>

     @if($errors->first('cert_sec'))
	<i>{{$errors->first('cert_sec')}}</i>
	@endif <br>
        Seleccione certificado de secundaria <input type='file' name = 'cert_sec'>
    <br>

    Seleccione escuela  <Select name='ides'>
                            @foreach($escuelas as $esc)
                            <option value = '{{$esc->ides}}'>{{$esc->nombre}}</option>
                            @endforeach
                        </select>
    <br>

    Seleccione registro medico  <Select name='idrm'>
                                    @foreach($rmedicos as $med)
                                    <option value = '{{$med->idrm}}'>{{$med->responsable}}</option>
                                    @endforeach
                                </select>
    <br>

    Seleccione municipio    <Select name='idm'>
                                @foreach($municipios as $mun)
                                <option value = '{{$mun->idm}}'>{{$mun->nombre}}</option>
                                @endforeach
                            </select>
    <br>

<input type = 'submit' balue='Guardar'>
<br>

</form>
</div>
@stop
