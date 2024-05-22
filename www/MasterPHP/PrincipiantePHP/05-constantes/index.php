<!--DOCUMENTO CREADO PARA DOCUMENTAR COMO-->
<!--FUNCIONAN LAS CONSTANTES Y COMO IMPRIMIRLAS-->
<?php

    //CONSTANTES
    //CONTENEDOR DE INFORMACIÓN QUE NO PUEDE VARIAR

    define('nombre','JAHIR GUZMAN');
    echo "<h1>".nombre."</h1>";

    //CONSTANTES PREDEFINIDAS

    echo PHP_VERSION."</br>";
    echo PHP_OS."</br>";
    echo __LINE__."</br>";
    echo __FILE__."</br>";
    
    function holaMundo(){
        echo __FUNCTION__."</br>";
    }
    holaMundo();
?>
<!--DOCUMENTO CREADO POR-->
<!--JAHIR GUZMAN        -->
<!--CON FECHA 07-04-2024-->