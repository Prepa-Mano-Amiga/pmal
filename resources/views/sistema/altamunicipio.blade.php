@extends('sistema.principal')

@section('contenido')
<div class="box">
  <h3>Nuevo Municipio</h3>
  <form>
    <div>
      <input type="text" name="idm">
      <label for="">Clave</label>
    </div>
    <div>
      <input type="text" name="nombre">
      <label for="">Nombre</label>
    </div>    
    <input class="btn btn-primary btn-block" type="submit" value="Enviar">
    <input class="btn btn-primary btn-block" type="reset" value="Cancelar">
  </form>
</div>
@stop