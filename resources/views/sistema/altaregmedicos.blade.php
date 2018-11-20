@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Registro Medico</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
		<form action ="{{route('guardaregmedico')}}" class="form p-t-20" method='POST' enctype='multipart/form-data'>
			{{csrf_field()}}
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('idrm'))
						<i>{{$errors->first('idrm')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Clave de registro</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
			 					<input type = 'text' class="form-control" name = 'idrm' value="{{$idrm}}" readonly="readonly">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('responsable'))
						<i>{{$errors->first('responsable')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Responsable</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name = 'responsable' value="{{old('responsable')}}" >
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('num_hermanos'))
						<i>{{$errors->first('num_hermanos')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Numero de hermanos</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-money"></i></div>
				 				<input type = 'text' class="form-control" name = 'num_hermanos' value="{{old('num_hermanos')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('nom_hermanos'))
						<i>{{$errors->first('nom_hermanos')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Nombre de los hermanos</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name = 'nom_hermanos' value="{{old('nom_hermanos')}}">
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('edad'))
						<i>{{$errors->first('edad')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Edad</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='edad' value="{{old('edad')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('tipo_sangre'))
						<i>{{$errors->first('tipo_sangre')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Tipo de sangre</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='tipo_sangre' value="{{old('tipo_sangre')}}">
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('contacto1'))
						<i>{{$errors->first('contacto1')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Primer contacto</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='contacto1' value="{{old('contacto1')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('tel1'))
						<i>{{$errors->first('tel1')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Numero</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
								<input type ='text' class="form-control" name ='tel1' value="{{old('tel1')}}">
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('contacto2'))
						<i>{{$errors->first('contacto2')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Segundo contacto</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='contacto2' value="{{old('contacto2')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('tel2'))
						<i>{{$errors->first('tel2')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Numero</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
								<input type ='text' class="form-control" name ='tel2' value="{{old('tel2')}}">
						</div>
                    </div>
				</div>
			</div>

			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('contacto3'))
						<i>{{$errors->first('contacto3')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Tercer contacto</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								<input type ='text' class="form-control" name ='contacto3' value="{{old('contacto3')}}">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">	
					@if($errors->first('tel3'))
						<i>{{$errors->first('tel3')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Numero</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-mobile"></i></div>
								<input type ='text' class="form-control" name ='tel3' value="{{old('tel3')}}">
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