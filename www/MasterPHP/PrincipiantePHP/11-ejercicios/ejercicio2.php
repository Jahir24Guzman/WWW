<?php

/*
ESCRIBIR UN SCRPT EN PHP QUE NOS DEVUELVA
TODOS LOS NUMEROS PARES QUE HAY DEL 1 AL 100
*/

for($i = 1; $i <= 100; $i++){
    if($i%2 == 0){
        echo $i." <br/>";
    }
}