
<!DOCTYPE html>
<html>
<head>
<title>Calificaciones impresas</title> 

</head>
<body>
<h1>Calificaciones: </h1>

<?php  
for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo $i;
}

?>

<?php 
echo $_POST['nombres'];
?>



<p>Volver: <a href="calificaciones.php">Regresar</a>


</body>
</html>
