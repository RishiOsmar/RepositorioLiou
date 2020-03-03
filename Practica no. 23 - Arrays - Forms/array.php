
<html>
<head>
<title> Tarea</title>
</head>

<h1><center> FORMULARIO </center> </h1>

<form action="array.php" method="POST">
Nombre:
<input type="text"name="info[nombre]" required>
<br>
Matricula:
<input type="number" name="info[matricula]" required>
<br>
Edad:
<input type="number" name="info[edad]" required>
<br>
Carrera:
<input type="text" name="info[carrera]" required>
<br>
E-mail:
<input type="text"name="info[email]" required>
<br>
Telefono:
<input type="number"name="info[telefono]" required>
<br>
Tutor:
<input type="text"name="info[tutor]" required>
<br>
<center> <input type="submit" value="enviar"> </center>
</form>


<?php
//Desarrollar un formulario donde se capture de entrada: Nombre del alumno, matrícula, edad, carrera, 
//email, telefono y tutor; almacenar los valores en un array y mostrarlos si la matricula 
//se encuentra entre 100 y 1000.

if (isset($_POST['info'])) {
    $array=$POST['info'];
    $nombre=$array['nombre'];
    $matricula=$array['matricula'];
    $edad=$array['edad'];
    $carrera=$array['carrera'];
    $email=$array['email'];
    $telefono=$array['telefono'];
    $tutor=$array['tutor'];

    echo "Los valores obtenidos en el formulario con Array son: <br>
    nombre:".$nombre."<br>matricula:".$matricula."<br>edad:".$edad."<br>carrera:".
    $carrera."<br>email: ".$email."<br>telefono: ".$telefono."<br>tutor: ".$tutor."";
}




?>




</html>



