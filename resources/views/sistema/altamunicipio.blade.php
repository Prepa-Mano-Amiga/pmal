<html>
<body>
<head><title>Alta Municipio</title></head>
    <h1>Alta Municipio</h1><br>
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
        
        <input type="submit" name="Guardar" value="Guardar">
    </form>
</body>
</html>