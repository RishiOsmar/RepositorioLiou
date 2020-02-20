<!DOCTYPE html>
<html>
<head>
	<title>Enviado</title>
</head>

	<h1>Estado de envio</h1>
	<!-- Se inicializa la condicion si los correos coinciden -->
<?php
if ($_POST['correo2']==$_POST['correo']) {
	echo "El correo COINCIDE <br>";
	echo "El correo es : "; echo $_POST['correo'];
	echo "<br>";
	echo "Usted decidio: "; echo $_POST['Opciones']; echo "<br>";
}
else{
	echo "El correo no COINCIDE";
}
?>
<!-- Boton para volver a ingresar el correo -->
  <p>Volver al index: <a href="index.php">Volver a escribir</a>

</body>
</html>