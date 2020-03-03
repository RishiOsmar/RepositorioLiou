

<?php

//realizar un programa que muestre las peliculas que se han visto. crear un array que contenga los meses de enero, //
//febrero,marzo y abril, asignando los valores, 9,12,0 y  17 respectivamente. //
//Si en alguno de los meses no se han visto ninguna pelicula, no va a demostrar la info. de ese mes.// 

$mes[0]="Enero";
$mes[1]="Febrero";
$mes[2]="Marzo";
$mes[3]="Abril";

$mes[0]=9;
$mes[1]=12;
$mes[2]=0;
$mes[3]=17;


echo"</br>";

if ($mes[2]=="0") {
    echo "No hay info. disponible";
}else{
    echo $mes;
}

echo"</br>";


?>
