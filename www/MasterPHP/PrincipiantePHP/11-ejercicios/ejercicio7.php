<?php
/*
EJERCICIO 7
ACTUALIZACION DEL EJERCICIO 5 (NUMEROS IMPARES)
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if($numero1 < $numero2){
        for($i = 0; $i <= $numero2; $i++){
            
            if($i%2 != 0){
                echo "<h4>$i ES IMPAR</h4>";
            }else{
                echo "<h4>$i ES PAR</h4>";
            }
    
        }
    }else{
        echo "<h1>EL PARAMETRO NUMERO 1 DEBE SER MENOR QUE EL NUMERO 2</h1>";
    }
    
}else{
    echo "<h1>LOS PARAMETROS GET NO EXISTEN</h1>";
}