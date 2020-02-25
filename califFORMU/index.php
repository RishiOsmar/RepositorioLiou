
<!-- Hacer un formulario en el cual ingrese su nombre y calificacion y si la calificacion es mayor a 7 
que imprima aprobado sino, reprobado para 5 alumnos -->

<!DOCTYPE html>
<html>

<head>
	<title>Sistema.Calcular.Calificacion</title>
</head>
<!-- Se vincula el archivo "imprimircalif" en el cual se mostraran los resultados -->
<form action="imprimircalif.php" method="post"/>
	<center><h1>Consulte el estado de su calificacion</h1></center>
	<h2>Ingrese su calificacion obtenida: </h2>
	<!-- Se crean cajas de texto en las cuales se guardan los nombres de los alumnos -->
	<!-- Se crean cajas para guardar las calificaiones de los alumnos -->
<p>Alumno 01:
<input type="text" size="40" name="nombreA1"></p>	
<p>Calificacion obtenida:
<input type="number" name="calif1"></p>

<br>
<p>Alumno 02:
<input type="text" size="40" name="nombreA2"></p>	
<p>Calificacion obtenida:
<input type="number" name="calif2"></p>

<br>	
<p>Alumno 03:
<input type="text" size="40" name="nombreA3"></p>	
<p>Calificacion obtenida:
<input type="number" name="calif3"></p>

<br>
<p>Alumno 04:
<input type="text" size="40" name="nombreA4"></p>	
<p>Calificacion obtenida:
<input type="number" name="calif4"></p>

<br>
<p>Alumno 05:
<input type="text" size="40" name="nombreA5"></p>	
<p>Calificacion obtenida:
<input type="number" name="calif5"></p>

<!-- Boton para enviar o borrar los datos ingresados -->

<center><input type="submit" name="Consultar"></center>

<center><input type="reset" value="Borrar"></center>

</form>

</body>
</html>