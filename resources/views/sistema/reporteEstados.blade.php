<html>
<body>
<h1>Reporte de Estados</h1>
<br>
<table  border=1>
<tr>
    <td>Clave</td>
    <td>Nombre</td>
    <td>Operaciones</td>
    @foreach($estados as $es)
<tr>
    <td>{{$es->ide}}</td>
    <td>{{$es->nombre}}</td>
    <td><a href="#">Eliminar </a>
    <a href="#">Modificar</a></td>
</tr>  
    @endforeach
</table>
</body>
</html>