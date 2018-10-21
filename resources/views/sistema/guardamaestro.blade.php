<!DOCTYPE html>
<html>
<head>
	<title>Modificar Maestros</title>
</head>
<body>
    <h1>Alta Maestros</h1><br>
    <form action="{{route('editamaestro')}}" method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        
        @if($errors->first('idm'))
            <i>{{$errors->first('idm') }}</i>
        @endif<br>
        Clave profesor: <br><input type="text" name="idm" value="{{$maestro->idm}}" readonly="readonly"><br>
        
        @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif<br>
        Nombre: <br><input type="text" name="nombre" value="{{$maestro->nombre}}"><br>
        
        @if($errors->first('edad'))
            <i>{{$errors->first('edad') }}</i>
        @endif<br>
        Edad: <br><input type="text" name="edad" value="{{$maestro->edad}}"><br>
        
        @if($maestro->sexo=="F")
        Sexo: <input type="radio" name="sexo" value="M">M
              <input type="radio" name="sexo" value="F" checked>F<br>
        @else
        Sexo: <input type="radio" name="sexo" value="M" checked>M
              <input type="radio" name="sexo" value="F">F<br>
        @endif
        
        @if($errors->first('cp'))
            <i>{{$errors->first('cp') }}</i>
        @endif<br>
        Codigo Postal: <br><input type="text" name="cp" value="{{$maestro->cp}}"><br>
        
        @if($errors->first('beca'))
            <i>{{$errors->first('beca') }}</i>
        @endif<br>
        Beca: <br><input type="text" name="beca" value="{{$maestro->beca}}"><br><br>

        Seleccione Carrera 
        <select name="idc">
            <option value='{{$idc}}'>{{$carrera}}</option>
            @foreach($demascarreras as $dc)
            <option value='{{$dc->idc}}'>{{$dc->nombre}}</option>
            @endforeach
        </select><br><br>

        @if($errors->first('archivo'))
            <i>{{$errors->first('archivo') }}</i>
        @endif<br>
        
        <img src="{{asset('archivos/'.$maestro->archivo)}}" height="150" width="150"><br>
        Seleccione Foto
        <input type="file" name='archivo'><br>
        <input type="submit" name="Guardar" value="Guardar">
    </form>
</body>
</html>