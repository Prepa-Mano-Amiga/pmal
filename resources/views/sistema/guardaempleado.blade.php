@extends('sistema.principal')

@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Modifica Empleado</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
		<form action ="{{route('editaempleado')}}" class="form p-t-20" method='POST' enctype='multipart/form-data'>
			{{csrf_field()}}
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('idbe'))
					<i>{{$errors->first('idbe')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Clave empleado</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
								<input type = 'text' class="form-control" name = 'idbe' value="{{$bempleados->idbe}}" readonly="readonly">
						</div>
                    </div>
				</div>
				
				<div class="col-lg-6">
					@if($errors->first('nombre'))
					<i>{{$errors->first('nombre')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Nombre de empleado</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								 <input type ='text' class="form-control" name = 'nombre' value="{{$bempleados->nombre}}" >
					 	</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('ap_pat'))
					<i>{{$errors->first('ap_pat')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Apellido paterno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type = 'text' class="form-control" name = 'ap_pat' value="{{$bempleados->ap_pat}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('ap_mat'))
					<i>{{$errors->first('ap_mat')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Apellido Materno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
					 			<input type ='text' class="form-control" name = 'ap_mat' value="{{$bempleados->ap_mat}}">
						</div>
                    </div>
				</div>
			</diV>

			<div class="row">
                <div class="col-lg-4">
					@if($errors->first('turno'))
					<i>{{$errors->first('turno')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Turno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-timer"></i></div>
								<input type ='text' class="form-control" name ='turno' value="{{$bempleados->turno}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-4">
					@if($errors->first('correo'))
					<i>{{$errors->first('correo')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Correo</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-email"></i></div>
								<input type ='text' class="form-control" name ='correo' value="{{$bempleados->correo}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-4">
					@if($errors->first('telefono'))
					<i>{{$errors->first('telefono')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Telefono</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
								<input type ='text' class="form-control" name ='telefono' value="{{$bempleados->telefono}}">
						</div>
                    </div>
				</div>
			</div>
				<button type='submit' class="btn btn-success  btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light m-r-10" Value='Guardar'><i class="ti-plus"></i>Guardar</button>
                <button type="reset" class="btn btn-danger btn-flat btn-addon m-b-10 m-l-5 waves-effect waves-light" value="Cancelar"><i class="ti-close"></i>Cancelar</button>
		</form>
	</div>
</div>
@stop