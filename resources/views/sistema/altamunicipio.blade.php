@extends('sistema.principal')

@section('contenido')
<div class="box">
  

<h3>Nuevo Municipio</h3>
<form action='{{route('guardamun')}}' method='POST' enctype='multipart/form-data'>
  <div class="row">
    <div class="col">
    {{csrf_field()}}
        @if($errors->first('idm'))
	          <i>{{$errors->first('idm')}}</i>
	      @endif
      <input type="text"  name = 'idm' value="{{$idmun}}" readonly="readonly">
    </div>
    <div class="col">
    @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif
        <input type="text" name="nombre" value="{{old('nombre')}}"><br>
        <label for="">Nombre</label>
    </div> 
    <Select name='ide'>
      @foreach($estados as $es)
        <option value = '{{$es->ide}}'>{{$es->nombre}}</option>
        <label for="">Seleccione Estado </label>
      @endforeach
    </select>
  </div>
  <input  class="btn btn-primary btn-block" type="submit" name="Guardar" value="Guardar">
        <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
</form >
</div>
@stop
