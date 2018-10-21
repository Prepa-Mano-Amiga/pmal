<html>
<body>
<head><title>Alta Municipio</title></head>
    <h1>Alta Maestros</h1><br>
    <form action='' method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        
        @if($errors->first('nombre'))
            <i>{{$errors->first('nombre') }}</i>
        @endif<br>
        Nombre: <br><input type="text" name="nombre" value="{{old('nombre')}}"><br>
        
        <input type="submit" name="Guardar" value="Guardar">
    </form>
</body>
</html>