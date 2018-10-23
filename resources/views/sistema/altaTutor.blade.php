<html>
    <body>
        <head><title></title></head>
        <form action='{{route('guardaescuela')}}' method='POST' enctype='multipart/form-data'>
            {{csrf_field()}}
                @if($errors->first('idt'))
                    <i>{{$errors->first('idt')}}</i>
                @endif
                Clave<br><input type="text"  name = 'idt' value="{{$idtu}}" readonly="readonly"><br><br>
            
                @if($errors->first('nombre'))
                    <i>{{$errors->first('nombre') }}</i>
                @endif
                Nombre<br><input type="text" name="nombre" value="{{old('nombre')}}"><br><br>

                @if($errors->first('ap_pat'))
                    <i>{{$errors->first('ap_pat') }}</i>
                @endif
                Apellido Paterno<br><input type="text" name="ap_pat" value="{{old('ap_pat')}}"><br><br>

                @if($errors->first('ap_mat'))
                    <i>{{$errors->first('ap_mat') }}</i>
                @endif
                Apellido Materno<br><input type="text" name="ap_mat" value="{{old('ap_mat')}}"><br><br>

                @if($errors->first('fec_nac'))
                    <i>{{$errors->first('fec_nac') }}</i>
                @endif
                Fecha De Nacimiento<br><input type="date" name="fec_nac" value="{{old('fec_nac')}}"><br><br>
                
                @if($errors->first('ocupacion'))
                    <i>{{$errors->first('ocupacion') }}</i>
                @endif
                Ocupacion<br><input type="text" name="ocupacion" value="{{old('ocupacion')}}"><br><br>

                @if($errors->first('Compañia'))
                    <i>{{$errors->first('Compañia') }}</i>
                @endif
                Compañia<br><input type="text" name="Compañia" value="{{old('Compañia')}}"><br><br>

                @if($errors->first('curp'))
                    <i>{{$errors->first('curp') }}</i>
                @endif
                Curp<br><input type="text" name="curp" value="{{old('curp')}}"><br><br>

                @if($errors->first('grado_estudios'))
                    <i>{{$errors->first('grado_estudios') }}</i>
                @endif
                Grado de Estudios<br><input type="text" name="grado_estudios" value="{{old('grado_estudios')}}"><br><br>

                @if($errors->first('email'))
                    <i>{{$errors->first('email') }}</i>
                @endif
                Email<br><input type="text" name="email" value="{{old('email')}}"><br><br>

                @if($errors->first('calle'))
                    <i>{{$errors->first('calle') }}</i>
                @endif
                Calle<br><input type="text" name="calle" value="{{old('calle')}}"><br><br>

                @if($errors->first('num_int'))
                    <i>{{$errors->first('num_int') }}</i>
                @endif
                Numero Interior<br><input type="text" name="num_int" value="{{old('num_int')}}"><br><br>

                @if($errors->first('num_ext'))
                    <i>{{$errors->first('num_ext') }}</i>
                @endif
                Numero Exterior<br><input type="text" name="num_ext" value="{{old('num_ext')}}"><br><br>

                @if($errors->first('colonia'))
                    <i>{{$errors->first('colonia') }}</i>
                @endif
                Colonia<br><input type="text" name="colonia" value="{{old('colonia')}}"><br><br>

                @if($errors->first('localidad'))
                    <i>{{$errors->first('localidad') }}</i>
                @endif
                Localidad<br><input type="text" name="localidad" value="{{old('localidad')}}"><br><br>

                @if($errors->first('cp'))
                    <i>{{$errors->first('cp') }}</i>
                @endif
                Codigo Postal<br><input type="text" name="cp" value="{{old('cp')}}"><br><br>

                Seleccione Municipio
                <Select name='idm'>
                @foreach($municipios as $mun)
                    <option value = '{{$mun->idm}}'>{{$mun->nombre}}</option>
                @endforeach
            </select><br><br>

            Seleccione Alumno
                <Select name='ida'>
                @foreach($alumnos as $alum)
                    <option value = '{{$alum->ida}}'>{{$alum->nombre}}</option>
                @endforeach
            </select><br><br>
            <input  class="btn btn-primary btn-block" type="submit" name="Guardar" value="Guardar">
            <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
        </form >
    </body>
</html>