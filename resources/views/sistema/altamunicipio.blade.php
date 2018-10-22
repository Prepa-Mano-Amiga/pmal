@extends('sistema.principal')

@section('contenido')
<div class="box">
  <h3>Nuevo Municipio</h3>
  <form action='{{route('guardamun')}}' method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        
        @if($errors->first('idm'))
	        <i>{{$errors->first('idm')}}</i>
	    @endif <br>
      Clave Municipio <input type = 'text' name = 'idm' value="{{$idmun}}" readonly="readonly">

        @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif<br>
        Nombre: <br><input type="text" name="nombre" value="{{old('nombre')}}"><br>

        Seleccione Estado <Select name='ide'>
                            @foreach($estados as $es)
                              <option value = '{{$es->ide}}'>{{$es->nombre}}</option>
                            @endforeach
				                  </select>
        <br>
        <input  class="btn btn-primary btn-block" type="submit" name="Guardar" value="Guardar">
    <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
  </form>
</div>
@stop
