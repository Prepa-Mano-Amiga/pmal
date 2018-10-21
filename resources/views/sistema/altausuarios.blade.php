<html>
<body>
<h1> Alta de usuarios </h1>
<br>
<form action =''  method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idu'))
	<i>{{$errors->first('idu')}}</i>
	@endif <br>
	
Clave usuario <input type = 'text' name = 'idu' value="" readonly="readonly">
<br>
	@if($errors->first('usuario'))
	<i>{{$errors->first('usuario')}}</i>
	@endif <br>
 Nombre de Usuario <input type ='text' name = 'usuario' value="{{old('usuario')}}" >
<br>
	@if($errors->first('contraseña'))
	<i>{{$errors->first('contraseña')}}</i>
	@endif <br>
Contraseña <input type = 'password' name = 'contraseña' value="{{old('contraseña')}}">
<br>
@if($errors->first('tipousu'))
	<i>{{$errors->first('tipousu')}}</i>
	@endif <br>
Tipo de usuario <input type ='texttipousu' value="{{old('tipousu')}}">
<br>
@if($errors->first('nombre'))
	<i>{{$errors->first('nombre')}}</i>
	@endif <br>
Nombre<input type ='text' name ='nombre' value="{{old('nombre')}}">
<br>
@if($errors->first('aPaterno'))
	<i>{{$errors->first('aPaterno')}}</i>
	@endif <br>
Apellido Paterno<input type ='text' name ='aPaterno' value="{{old('aPaterno')}}">
<br>
@if($errors->first('aMaterno'))
	<i>{{$errors->first('aMaterno')}}</i>
	@endif <br>
Apellido Materno<input type ='text' name ='aMaterno' value="{{old('aMaterno')}}">
<br>
</form>
</body>
</html>