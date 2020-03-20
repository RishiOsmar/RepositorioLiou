
<?php

$idcategoria=$_GET['idcategoria'];
$buscar=mysqli_query($conexion,"SELECT * FROM categorias WHERE
idcategoria='$idcategoria");
$fila=mysqli_fetch_array($buscar);
$categoria=$fila['categoria'];
$activo=$fila['activo'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Categoria</title>
</head>
<body>
<h1>Editar Categorias</h1>

<form action="modificarcategoria.php" method="post">
<label>Nombre de la categoria:</label>
<input type="hidden" name="idcategoria" value="<?php echo $idcategoria;?>">
<input type="text" name="categoria" value="<?php echo $categoria;?>"> 
<br>
<label>Estado:</label>
<select name="activo">
   <option value="1" <?php if ($activo==1) {echo 'selected';}?>>Activo</option>
   <option value="0" <?php if ($activo==0) {echo 'selected';}?>>Inactivo</option>
</select>
<br>
<input type ="submit" value="Guardar">
</body>
</html>

