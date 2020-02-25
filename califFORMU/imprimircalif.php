
<!DOCTYPE html>
<html>

<head>
	<title>Resultado de Calificacion</title>
</head>
	<center><h1>Resultados</h1></center>
	<?php
	// Se realiza la funcion IF para saber si la calificacion obtenida es igual o menor que 70//
	if ($_POST['c1']>=70) {
		echo "Alumno 01<br>";
		echo $_POST['nombre1']; echo " APROBO con un promedio de: "; echo $_POST['c1'];
	}else{echo "Alumno 01<br>";
		echo $_POST['nombre1']; echo " REPROBO con un promedio de: "; echo $_POST['c1']; }
//Si es arriba de 70, entonces es aprobatoria, sino sera reprobatoria//

echo "<br>";

echo "<br>";

if ($_POST['c2']>=70) {
		echo "Alumno 02<br>";
		echo $_POST['nombre2']; echo " APROBO con un promedio de: "; echo $_POST['c2'];
	}else{echo "Alumno 02 <br>";
		echo $_POST['nombre2']; echo " REPROBO con un promedio de: "; echo $_POST['c2']; }

echo "<br>";

echo "<br>";

		if ($_POST['c3']>=70) {
		echo "Alumno 03<br>";
		echo $_POST['nombre3']; echo " APROBO con un promedio de: "; echo $_POST['c3'];
	}else{echo "Alumno 03 <br>";
		echo $_POST['nombre3']; echo " REPROBO con un promedio de: "; echo $_POST['c3']; }

echo "<br>";

echo "<br>";

if ($_POST['c4']>=70) {
		echo "Alumno 04<br>";
		echo $_POST['nombre4']; echo " APROBO con un promedio de: "; echo $_POST['c4'];
	}else{echo "Alumno 04 <br>";
		echo $_POST['nombre4']; echo " REPROBO con un promedio de: "; echo $_POST['c4']; }

echo "<br>";

echo "<br>";

if ($_POST['c5']>=70) {
		echo "Alumno 05<br>";
		echo $_POST['nombre5']; echo " APROBO con un promedio de: "; echo $_POST['c5'];
	}else{echo "Alumno 05 <br>";
		echo $_POST['nombre5']; echo " REPROBO con un promedio de: "; echo $_POST['c5']; }

		echo "<br>";
//Boton por si se quiere volver a ingresar datos//
 ?>
 <center><p>Volver a introducir calificaciones: <a href="index.php">Regresar</a></center>

</body>
</html>