<?php

/*
BUCLE WHILE
ESTRUCTURA DE CONTROL QUE ITERA O REPITE
LA EJECUCION DE UNA SERIE DE INSTRUCCIONES
TANAS VECES COMO SEA NECESARIO, EN BASE
A UNA CONDICIÓN

while(condicion){
    bloque de instrucciones
    otra instruccion
}
*/

$numero = 0;
while($numero <= 100){
    echo $numero;

    if($numero != 100){
        echo ", ";
    }
    $numero++;

}

echo "</hr>";

//EJEMPLO

if((isset($_GET['numero']))){
    //CAMBIAR TIPO DE DATO
    $numero = (int) $_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";

$contador = 1;
while($contador <= 10){
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador++;

}

/*
DO WHILE
SIRVE PARA EJECUTAR LA INSTRUCCION UNA VEZ Y DESPUES
COMPRAR ALGO MAS, EN CASO DE CUMPLIR SE VUELVE A EJECUTAR
EL CONTENIDO DEL BUCLE.

DO{
    BLOQUE DE INSTRUCCIONES
}while(condicion);
*/

//EJEMPLO

$edad = 17;
$contador = 1;

do{
    echo "TIENES ACCESO NIVEL $contador <br/>";
    $contador++;
}while($edad >= 18 && $contador <= 10);

