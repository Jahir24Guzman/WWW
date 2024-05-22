<?php
    /*
    TIPOS DE DATOS........................................
    
    *ENTERO (INT / INTEGER) = 99..........................
    *COMA FLOTANTE O DECIMALES (FLOAT / DOUBLE) = 24.24...
    *CADENAS DE CARACTERES (STRING) = "HOLA SOY UN STRING"
    *BOLEANOS (BOOL) = TRUE / FALSE.......................
    *NULO (NULL)..........................................
    *ARRAYS / VECTORES (COLECCION DE DATOS)...............
    *OBJETOS (FUNCIONES INDEPENDIENTES)...................
    */

    $numero = 100;
    $decimal = 24.24;
    $texto = "TEXTO  $numero";
    $verdadero = true;
    $nula = null;

    echo gettype($numero);
    echo "</br>";
    echo gettype($decimal);
    echo "</br>";
    echo gettype($texto);
    echo "</br>";
    echo gettype($verdadero);
    echo "</br>";
    echo gettype($nula);
    echo "</br>";

    echo "$texto";

    //DEBUGUEAR

    $mi_nombre[] = "Jahir Guzman";
    $mi_nombre[] = "Jahir Guzman";

    var_dump($mi_nombre);
?>
<!--DOCUMENTO CREADO POR-->
<!--JAHIR GUZMAN        -->
<!--CON FECHA 07-04-2024-->