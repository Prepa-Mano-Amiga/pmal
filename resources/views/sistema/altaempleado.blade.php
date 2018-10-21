<html>
<body>
<h1> Alta de Empleados </h1>
<br>
<form action =''  method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idu'))
	<i>{{$errors->first('idu')}}</i>
	@endif <br>
	
Clave empleado <input type = 'text' name = 'idu' value="" readonly="readonly">
<br>
	@if($errors->first('empleado'))
	<i>{{$errors->first('empleado')}}</i>
	@endif <br>
 Nombre de empleado <input type ='text' name = 'empleado' value="{{old('empleado')}}" >
<br>
	@if($errors->first('appat'))
	<i>{{$errors->first('appat')}}</i>
	@endif <br>
apellido paterno <input type = 'text' name = 'appat' value="{{old('appat')}}">
<br>
@if($errors->first('apmat'))
	<i>{{$errors->first('apmat')}}</i>
	@endif <br>
apellido materno <input type ='text' value="{{old('apmat')}}">
<br>
@if($errors->first('turno'))
	<i>{{$errors->first('turno')}}</i>
	@endif <br>
Turno<input type ='text' name ='turno' value="{{old('turno')}}">
<br>
@if($errors->first('correo'))
	<i>{{$errors->first('correo')}}</i>
	@endif <br>
Correo<input type ='text' name ='correo' value="{{old('correo')}}">
<br>
@if($errors->first('telefono'))
	<i>{{$errors->first('telefono')}}</i>
	@endif <br>
Telefono<input type ='text' name ='telefono' value="{{old('telefono')}}">
<br>
</form>
</body>
</html>