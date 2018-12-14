@extends('sistema.principal')
@section('contenido')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Alta Libro</h4>
        <h6 class="card-subtitle">Preparatoria Mano Amiga Lerma</h6>
		<form action ="{{route('editalibro')}}"  class="form p-t-20" method='POST' enctype='multipart/form-data'>
			{{csrf_field()}}
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('idl'))
						<i>{{$errors->first('idl')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Clave libro</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-key"></i></div>
			 					<input type = 'text' class="form-control" name = 'idl' value="{{$libros->idl}}" readonly="readonly">
						</div>
                    </div>
				</div>

				<div class="col-lg-6">
					@if($errors->first('nombre'))
						<i>{{$errors->first('nombre')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Nombre del libro</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>
								 <input type = 'text' class="form-control" name = 'nombre' value="{{$libros->nombre}}" >
						</div>
                    </div>
				</div>
			</div>
				
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('autor'))
					<i>{{$errors->first('autor')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Autor</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-user"></i></div>
								 <input type = 'text' class="form-control" name = 'autor' value="{{$libros->autor}}">
						</div>
                    </div>
				</div>
				
				<div class="col-lg-6">
					@if($errors->first('clasificacion'))
						<i>{{$errors->first('clasificacion')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Clasificación</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>
					 			<input type ='text'  class="form-control" name = 'clasificacion' value="{{$libros->clasificacion}}">
						</div>
                    </div>
				</div>
			</div>
					
			<div class="row">
                <div class="col-lg-6">
					@if($errors->first('existencias'))
						<i>{{$errors->first('existencias')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Existencias</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>	
								<input type ='text' class="form-control" name ='existencias' value="{{$libros->existencias}}">
						</div>
                    </div>
				</div>
					
				<div class="col-lg-6">
					@if($errors->first('codigo'))
						<i>{{$errors->first('codigo')}}</i>
					@endif
					<div class="form-group">
                        <label for="exampleInputuname">Codigo</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>
								<input type ='text' class="form-control" name ='codigo' value="{{$libros->codigo}}">
						</div>
                    </div>
				</div>
			</div>
					
			<div class="row">
                <div class="col-lg-6">
					<div class="form-group">
                        <label for="exampleInputuname">Disponible</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ti-book"></i></div>
                            @if($libros->disponible=="Si")
					 			<input type = 'radio' name = 'disponible' value = 'Si' checked >Si
                                 <input type = 'radio' name = 'disponible' value = 'No'  >No
                            @else
								<input type = 'radio' name = 'disponible' value = 'Si'>Si
                                <input type = 'radio' name = 'disponible' value = 'No' checked>No
                            @endif
						</div>
                    </div>
				</div>
					
				<div class="col-lg-6">
					@if($errors->first('archivo')) 
						<i> {{ $errors->first('archivo') }} </i> 
					@endif
					<div class="form-group">
						<label for="exampleInputuname">Seleccione foto</label><br>
						<img src ="{{asset('archivos/'.$libros->archivo)}}" height = 150 width = 150>
						<div class="input-group">
							<div class="input-group-addon"><i class="ti-cloud-up"></i></div>
								<input type= 'file' class="form-control" name = 'archivo'>
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