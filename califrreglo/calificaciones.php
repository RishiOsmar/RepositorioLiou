
<html>
<head>
<title> Calificaciones </title>
</head>

<body>

<h1> Ingrese su calificacion </h1>

<form action="imprimir.php" method="POST"/>

<table>
	  
      <?php

	  for($i=0;$i<10;$i++){
        ?>
      <tr>
      <td>
      <p> Nombre: </p> 
      <input type="text" name="nombre<?=$i ?>" id="nombre" />
      <p> Calif 1: </p>
      <input type="number" name="calif<?=$i ?>" id="calif" />
      <p> Calif 2: </p>
      <input type="number" name="calif2<?=$i ?>" id="calif2" />
      <br>
      </td>
      </tr>
      <?php
      }
      $alumnos=array(
        array("nombre"),
        array("calif1"),
        array("calif2"),
    );
    foreach ($alumnos as $item){
      echo "{$item['nombre']} / {$item['calif']} / {$item['calif2']} <br />";
   }

      ?>
	  
      </table>
	  <center> <input type="submit" value="Submit"> </center>

    </form>
<?php
//1. Realizar un programa que permita ingresar las calificaciones de 2 materias de 10 estudiantes, 
//imprimir la matriz. El funcionamiento será:
//En un formulario se captura el nombre y las calificaciones de las 2 materias, al llegar al alumno 
//número 10 al terminar de capturar sus 2 calificaciones y presionar guardar, en ese momento se deberá 
//imprimir la matriz con los 10 alumnos y las 2 calificaciones de cada uno.

?>
</body>
</html>