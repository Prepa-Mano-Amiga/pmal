<html>
<body>
<h1>Reporte de usuarios</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Usuario</td>
    <td>Contraseña</td>
    <td>Tipo Usuario</td>
    <td>Nombre</td><td>Apellido Paterno</td>
    <td>Apellido Materno</td>
    <td>Operaciones</td>
    @foreach($usuarios as $us)
<tr>
    <td>{{$us->idu}}</td>
    <td>{{$us->usuario}}</td>
    <td>{{$us->password}}</td>
    <td>{{$us->tipo_usu}}</td>
    <td>{{$us->nombre}}</td>
    <td>{{$us->ap_pat}}</td>
    <td>{{$us->ap_mat}}</td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
</body>
</html>