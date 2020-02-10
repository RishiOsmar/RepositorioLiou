
<!DOCTYPE html>
<html>
<head>
	<title>Programa 16</title>
</head>
<body>
<h2>Desarrollar lo siguiente: </h2>

<p>
Dado el radio y la altura de un cilindro, calcule e imprima
el area y su volumen
</p>

<?php
/* Declarar valores*/
$radio=10;
$altura=16;
/*Formulas a realizar*/
$arealateral=2*3.14*$radio*$altura;
$areabase=3.14*($radio^2);
$areatotal=$arealateral+($areabase*2);
$volumen=3.14*($radio^2)*$altura;
/* Escribir valores iniciales*/
echo "Cilindro <br>";
echo "Radio: $radio <br>";
echo "Altura:  $altura <br>";

echo "<br>";
/* Imprimir resultados*/
echo "Su area lateral es: $arealateral <br>";
echo "Su area base es: ", $areabase;
echo "<br>";
/* Sumar areas e imprimir el area total*/
echo "Su area total es:  $areatotal <br>";
echo "Volumen: $volumen <br>";


?>

</body>
</html>

