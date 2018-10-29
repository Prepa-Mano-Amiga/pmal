@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Usuario</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
		<form action ='{{route('guardausuario')}}'  class="form p-t-20" method='POST' enctype='multipart/form-data'>
			{{csrf_field()}}
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('idu'))
						<i>{{$errors->first('idu')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Clave usuario</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
				 				<input type = 'text' class="form-control" name = 'idu' value="{{$idus}}" readonly="readonly">
						</div>
                    </div>
				</div>
				
				<div class="col-lg-6">
					@if($errors->first('usuario'))
						<i>{{$errors->first('usuario')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Nombre de Usuario</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
				 				<input type ='text' class="form-control" name = 'usuario' value="{{old('usuario')}}" >
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('password'))
						<i>{{$errors->first('password')}}</i>
					@endif 
					<div class="form-group">
                        <label for="exampleInputuname">Contraseña</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-lock"></i></div>
				 				<input type = 'password' class="form-control" name = 'password' value="{{old('password')}}">
						</div>
                    </div>
				</div>
				
				<div class="col-lg-6">
					@if($errors->first('tipo_usu'))
					<i>{{$errors->first('tipo_usu')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Tipo de usuario</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
					 			<input type ='text' class="form-control" name='tipo_usu' value="{{old('tipo_usu')}}">
						</div>
                    </div>
				</div>
			</div>
					
			<div class="row">
                <div class="col-lg-4">
					@if($errors->first('nombre'))
						<i>{{$errors->first('nombre')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Nombre</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='nombre' value="{{old('nombre')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-4">
					@if($errors->first('ap_pat'))
						<i>{{$errors->first('ap_pat')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Apellido Paterno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='ap_pat' value="{{old('ap_pat')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-4">
					@if($errors->first('ap_mat'))
						<i>{{$errors->first('ap_mat')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Apellido Materno</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='ap_mat' value="{{old('ap_mat')}}">
						</div>
                    </div>
				</div>
			</div>
			<input type="submit" class="btn btn-success waves-effect waves-light m-r-10" name="Guardar" value="Guardar">
			<input type="reset" class="btn btn-danger waves-effect waves-light" value="Cancelar">
		</form>
	</div>
</div>
@stop