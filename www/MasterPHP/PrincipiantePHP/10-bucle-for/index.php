<?php

/*
BUCLE FOR
for(variable contador, condición, actualizando contador){
    BLOQUE DE INSTRUCCIONES
}
*/

/*
$resultado = 0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
    echo "<h1>$resultado</h1><br/>";
}
echo "<h1>EL RESULTADO ES: $resultado</h1><br/>";
*/

//TABLA DE MULTIPLICAR
if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>TABLA DE MULTIPLICAR DEL NUMERO $numero</h1>";

for($contador = 1; $contador <= 10; $contador++){
    if($numero == 45){
        echo "No se pueden mostrar las operaciones";
        break;
    }
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
}