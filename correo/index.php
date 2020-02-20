<!DOCTYPE html>
<html>
<head>
	<title>Confirmar Correo</title>
</head>

<!-- Se efectua el metodo "post"  con el arhcivo confirmar-->
<form action="confirmar.php" method="post"/>

<center> <font size="7" color="red">Correo Electronico</font></center>


<!-- Se capturan los datos -->
<p>Correo electronico:
<input type="text" size="40" name="correo"></p>
<p>Confirme su correo electronico:
<input type="text" size="40"name="correo2"></p>




<!-- Se inicializa el select si se quiere recibir correos -->
<p>Desea recibir correos de nuestra parte?
	<select name="Opciones">
	 <option value="Recibir correos">Si</option>
	 <option value="No recibir correos">No</option>
</select></p>



<!-- Boton para, ya sea, enviar o borrar datos -->
<p><input type="submit" name="Enviar datos">
<input type="reset" value="Borrar datos"></p>

</form>
</body>
</html>