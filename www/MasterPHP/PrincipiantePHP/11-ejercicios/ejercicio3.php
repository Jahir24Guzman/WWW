<?php

/*
EJERCICIO 3
ESCRIBE UN SCRIPT QUE IMPRIMA POR PANTALLA
LOS CUADRADOS, QUE ES UN NUMERO MULTIPLICADO
POR SI MISMO, DE LOS 40 PRIMEROS NUMEROS NATURALES.
PD: UTILIZAR BUCLE WHILE.
*/

/*
$contador = 0;
while($contador <= 40){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";

    $contador++;
}
*/

$contador = 0;
for($contador = 0; $contador <= 40; $contador++){
    $cuadrado = $contador*$contador;
    echo "<h3>El cuadrado de $contador es $cuadrado</h3>";
}