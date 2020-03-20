
<?php

require 'conexion.php';
$idcategoria=$_POST['idcategoria'];
$categoria=$_POST['categoria'];
$activo=$_POST['activo'];
$consulta=mysqli_query($conexion,"UPDATE categorias SET categoria='$
categoria', activo='$activo' WHERE idcategoria='$idcategoria'");
header('location: vistacategoria.php');

?>
