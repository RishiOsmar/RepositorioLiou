<!DOCTYPE html>
<html>

<head>
	<title>Programa 14 php</title>
</head>

<body bgcolor="grey">
<h1>Numero mayor o menor</h1>

<?php 
$num1=5;
$num2=10;
$num3=25;

if ($num1>$num2) {
	if ($num2>$num3) {
		echo "Los numeros de mayor a menor son numero 1= $num1 numero 2= $num2 numero 3= $num3 ";
	}
}
if ($num1>$num3) {
	if ($num3>$num2) {
		echo "Los numeros de mayor a menor son numero 1= $num1 numero 3= $num3 numero 2= $num2 ";
	}
}
if ($num2>$num1) {
	if ($num1>$num3) {
		echo "Los numeros de mayor a menor son numero 2= $num2 numero 1= $num1 numero 3= $num3 ";
	}
}
if ($num2>$num3) {
	if ($num3>$num1) {
		echo "Los numeros de mayor a menor son numero 2= $num2 numero 3= $num3 numero 1= $num1 ";
	}
}
if ($num3>$num2) {
	if ($num2>$num1) {
		echo "Los numeros de mayor a menor son numero 3= $num3 numero 2= $num2 numero 1= $num1 ";
	}
}
if ($num3>$num1) {
	if ($num1>$num2) {
		echo "Los numeros de mayor a menor son numero 3= $num3 numero 1= $num1 numero 2= $num2 ";
	}
}
else
echo "Los numeros son del mismo valor";

 ?>

</body>
</html>