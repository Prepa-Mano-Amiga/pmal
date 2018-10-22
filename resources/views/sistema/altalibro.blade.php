<html>
<body>
<h1> Alta de Libro </h1>
<br>
<form action =''  method='POST' enctype='multipart/form-data'>
{{csrf_field()}}

	@if($errors->first('idl'))
	<i>{{$errors->first('idl')}}</i>
	@endif <br>
	
Clave libro <input type = 'text' name = 'idl' value="" readonly="readonly">
<br>
	@if($errors->first('libro'))
	<i>{{$errors->first('libro')}}</i>
	@endif <br>=
 Nombre del libro <input type = 'text' name = 'libro' value="{{old('libro')}}" >
<br>
	@if($errors->first('autor'))
	<i>{{$errors->first('autor')}}</i>
	@endif <br>
Autor <input type = 'text' name = 'autor' value="{{old('autor')}}">
<br>
@if($errors->first('clas'))
	<i>{{$errors->first('clas')}}</i>
	@endif <br>
Clasificación <input type ='text'  name = 'clas' value="{{old('clas')}}">
<br>
@if($errors->first('exis'))
	<i>{{$errors->first('exis')}}</i>
	@endif <br>
Existencias<input type ='text' name ='exis' value="{{old('exis')}}">
<br>
@if($errors->first('codigo'))
	<i>{{$errors->first('codigo')}}</i>
	@endif <br>
Correo<input type ='text' name ='codigo' value="{{old('codigo')}}">
<br>
Disponible <input type = 'radio' name = 'dispo' value = 'Si' checked >n
<input type = 'radio' name = 'dispo' value = 'Si'>s
<br>
</form>
</body>
</html>