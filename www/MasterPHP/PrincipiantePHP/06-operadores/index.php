<!--DOCUMENTO CREADO PARA DOCUMENTAR-->
<!--COMO FUNCIONAN LOS OPERADORES ARITMETICOS-->
<?php
    //DECLARACIÓN DE VARIABLES
    $numero1 = 55;
    $numero2 = 24;

    //IMPRIMIR DATOS
    echo 'Suma: '.($numero1 + $numero2).'</br>';
    echo 'Resta: '.($numero1 - $numero2).'</br>';
    echo 'Multiplicación: '.($numero1 * $numero2).'</br>';
    echo 'División: '.($numero1 / $numero2).'</br>';
    echo 'Resto: '.($numero1 % $numero2).'</br>';

    //OPERADORES DE INCREMENTO Y DECREMENTO
    $year = 2024;

    //DECREMENTO
    //$year--;
    //$year = $year - 1;

    //INCREMENTO
    //$year = $year + 1;
    //$year++;

    //PRE-INCREMENTO
    //$year = 1 + $year;
    //++$year;

    //PRE-DECREMENTO
    //$year = 1 - $year;
    --$year;

    echo "<h1>$year</h1>";

    //OPERADORES DE ASIGNACIÓN
    $edad = 55;

    echo $edad.'</br>';
    //EDAD + 5
    echo ($edad+=5).'</br>';
    echo ($edad-=5).'</br>';
    echo ($edad*=5).'</br>';
    echo ($edad/=5).'</br>';

?>
<!--DOCUMENTO CREADO POR-->
<!--JAHIR GUZMAN        -->
<!--CON FECHA 07-04-2024-->