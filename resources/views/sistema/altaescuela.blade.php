<html>
    <body>
        <head><title></title></head>
        <form action='{{route('guardaescuela')}}' method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
                @if($errors->first('ides'))
                    <i>{{$errors->first('ides')}}</i>
                @endif
                Clave<br><input type="text"  name = 'ides' value="{{$idec}}" readonly="readonly"><br><br>
            
                @if($errors->first('nombre'))
                    <i>{{$errors->first('nombre') }}</i>
                @endif
                Nombre<br><input type="text" name="nombre" value="{{old('nombre')}}"><br><br>

                @if($errors->first('localidad'))
                    <i>{{$errors->first('localidad') }}</i>
                @endif
                Localidad<br><input type="text" name="localidad" value="{{old('localidad')}}"><br><br>

                @if($errors->first('sostenimiento'))
                    <i>{{$errors->first('sostenimiento') }}</i>
                @endif
                Sostenimiento<br><input type="text" name="sostenimiento" value="{{old('sostenimiento')}}"><br><br>

                @if($errors->first('fec_engre'))
                    <i>{{$errors->first('fec_engre') }}</i>
                @endif
                Fecha De Egreso<br><input type="date" name="fec_engre" value="{{old('fec_engre')}}"><br><br>

                @if($errors->first('promedio'))
                    <i>{{$errors->first('promedio') }}</i>
                @endif
                Promedio<br><input type="text" name="promedio" value="{{old('promedio')}}"><br><br>

                @if($errors->first('clave_sector'))
                    <i>{{$errors->first('clave_sector') }}</i>
                @endif
                Clave de Sector<br><input type="text" name="clave_sector" value="{{old('clave_sector')}}"><br>

                Seleccione Municipio
                <Select name='idm'>
                @foreach($municipios as $mun)
                    <option value = '{{$mun->idm}}'>{{$mun->nombre}}</option>
                @endforeach
            </select><br><br>
            <input  class="btn btn-primary btn-block" type="submit" name="Guardar" value="Guardar">
            <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
        </form >
    </body>
</html>