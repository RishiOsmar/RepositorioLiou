
<!DOCTYPE html>
<html>
<head>
	<title>C A M B I O</title>
</head>
<body>
<h2>Desarrollar lo siguiente: </h2>

<p>
Construir un codigo en el que ingresando una cantidad, que sea menor o igual a 100 dolares
realize el tipo de cambio a pesos
</p>

<?php
/*Declar valores*/
$peso=1;
$dolar=18.67;
/*Desarollar formula */
$total=$peso/$dolar;

/*Condicionar */
if ($peso>=100) {
    echo "TE EXCEDISTE DEL LIMITE";
} else {
/*Imprimir datos */	
echo "Cantidad de pesos: $peso";
echo "<br>";
echo "Precio del dolar : $dolar";
echo "<br>";
echo "El total es: $total";

}




?>

</body>
</html>
