<?php
/*
EJERCICIO 4
REOOGER 2 NUMEROS POR LA URL (GET) 
Y HACER TODAS LAS OPERACIONES BASICAS DE UNA
CALCULADORA (SUMA, RESTA, DIVISION Y MULTIPLICACION).
*/

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "<h1>CALCULADORA</h1>";
echo "Suma: ".($numero1+$numero2)."<br/>";
echo "Resta: ".($numero1-$numero2)."<br/>";
echo "División: ".($numero1/$numero2)."<br/>";
echo "Multiplicación: ".($numero1*$numero2);

}else{
    echo "<h1>Introduce correctamente los valores en la URL</h1>";
}