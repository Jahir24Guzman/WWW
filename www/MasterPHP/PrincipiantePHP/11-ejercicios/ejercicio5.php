<?php
/*
EJERRCICIO 5
ESCRIBE UN PROGRAMA QUE IMPRIMA POR PANTALLA
TODOS LOS NUMEROS ENTRE DOS NUMEROS QUE NOS
LLEGUEN POR URL (GET)
*/

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = 0; $i <= $numero2; $i++){
            echo "<h4>$i</h4>";
    
        }
    }else{
        echo "<h1>EL PARAMETRO NUMERO 1 DEBE SER MENOR QUE EL NUMERO 2</h1>";
    }
    
}else{
    echo "<h1>LOS PARAMETROS GET NO EXISTEN</h1>";
}
