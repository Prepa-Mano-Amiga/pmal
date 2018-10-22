@extends('sistema.principal')

@section('contenido')
	<div class="card card-login mx-auto mt-5">
		<div class="card-header">Alta Empleado</div>
    	<div class="card-body">
			<form action =''  method='POST' enctype='multipart/form-data'>
				<div class="form-group">
					{{csrf_field()}}

					@if($errors->first('idu'))
					<i>{{$errors->first('idu')}}</i>
					@endif 
					<div class="form-label-group">
						<input type="text" name="ide" class="form-control" placeholder="clave" required="required" autofocus="autofocus" readonly="readonly">
          				<label for="inputEmail">Clave</label>
					</div>
				</div>

				<div class="form-group">
					@if($errors->first('empleado'))
					<i>{{$errors->first('empleado')}}</i>
					@endif 
					<div class="form-label-group">
						<input type="text" name="nombre"  placeholder="nombre" required="required" autofocus="autofocus">
						<label for="inputEmail">Nombre del Empleado</label>
					</div>
				</div>
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
				<input class="btn btn-primary btn-block" type="submit" value="Enviar">
				<input class="btn btn-primary btn-block" type="reset" value="Cancelar">
			</form>
	</div>
@stop