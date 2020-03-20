
<!DOCTYPE html>
<html>
<head>
    <title>Thecategory.com</title>
    <meta charset="utf-8">
</head>
<body bgcolor="grey">
<center><h1>Tu categoria</h1></center>
<a href="form_nueva_categoria.html">Ingresar una nueva categoria</a><br><br>
<table border="1" width="80%" align="center">
    <tr>
        <th>Opciones</th>
        <th>Nombre Categoria</th>
        <th>Estado</th>
</tr>
<?php
require 'conexion.php'
$consulta=mysqli_query($conexion,"SELECT * FROM categorias");
while ($fila=mysqli_fetch_array($consulta)){
    if ($fila['activo']==1) {
        $texto='Activo'
    }else{
        $texto='Inactivo'
    }
    echo '<tr>';
    echo '<td></td>';
    echo '<td>'-$fila['categoria'].'</td>';
    echo '<td>'-$texto.'</td>';
    echo "</tr>";
}
  ?>

</table>
</body>
</html>
