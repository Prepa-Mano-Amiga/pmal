@extends('sistema.principal')

@section('contenido')
<div class="box">
  <h3>Nuevo Municipio</h3>
  <form action='' method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        
        @if($errors->first('idm'))
	        <i>{{$errors->first('idm')}}</i>
	    @endif <br>
        Clave de Municipio: <br><input type="text" name="idm" value="{{old('idmun')}}"><br>

        @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif<br>
        Nombre: <br><input type="text" name="nombre" value="{{old('nombre')}}"><br>

        Seleccione Estado <Select name='idc'>
					
				   </select>
        <br>
     <input class="btn btn-primary btn-block" type="submit" value="Enviar">
    <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
  </form>
</div>
@stop
