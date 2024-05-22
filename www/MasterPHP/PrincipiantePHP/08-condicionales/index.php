<!--DOCUMENTO CREADO PARA DOCUMENTAR LA FUNCIÓN-->
<!--LAS CONDICIONALES-->
<?php
//CONDICIONAL IF
    /*if(condicion){
        instrucciones
    }else{
        otras instrucciones
    }
    

    //OPERADORES DE COMPARACIÓN
    == igual
    === identico
    != diferente
    <> diferente
    !== no identico
    < menor que
    > mayor que
    <= menor o igual que
    >= mayor o igual que
    .
    . 
    .
    OPERADORES LOGICOS
    && AND (Y)
    !! OR (O)
    ! NOT (NO)
    ADN, OR
    */

    //EJEMPLO 3
    $color = "verde";

    if($color == "rojo"){
        echo "EL COLOR ES ROJO";
    }else{
        echo "EL COLOR NO ES ROJO";
    }
    
    echo "</br>";

    /*$year = 2023;

    if($year < 2024){
        echo "ES UN AÑO ANTERIOR A 2024";
    }else{
        echo "ES UN AÑO POSTERIOR A 2024";
    }*/

    /*$year = 2024;

    if($year != 2024){
        echo "ES UN AÑO DIFERENTE A 2024";
    }else{
        echo "ESTAMOS EN 2024";
    }*/

    //EJEMPLO 2
    $year = 2024;

    if($year >= 2024){
        echo "ESTAMOS DE 2024 EN ADELANTE";
    }else{
        echo "ES UN AÑO ANTERIOR A 2024";
    }

    //EJEMPLO 3

    $nombre = "Jahir Guzman";
    $ciudad = "Guadalajara";
    $continente = "Latino America";
    $edad = "19";
    $mayoria_edad = "18";

    if($edad >= $mayoria_edad){
        echo "<h1>$nombre Es mayor de edad</h1>";
        if($continente == "Latino America"){
            echo "<h2>Y es de $ciudad</h2>";
        }else{
            echo "No es de Latino America";
        }
        
    }else{
        echo "<h2>$nombre No es mayor de edad</h2>";
    }

    echo "<hr>";

    //EJEMPLO 4
    /*$dia = "7";
    if($dia == 1){
        echo "Es Lunes";
    }else{
        if($dia == 2){
            echo "Es Martes";
        }else{
            if($dia == 3){
                echo "Es Miercoles";
            }else{
                if($dia == 4){
                    echo "Es Juevess";
                }else{
                    if($dia == 5){
                        echo "Es Viernes";
                    }else{
                        echo "Es fin de semana";
                    }
                }
            }
        }

        
    }*/

    $dia = "3";
    if($dia == 1){
        echo "LUNES";
    }elseif($dia == 2){
        echo "MARTES";
    }elseif($dia == 3){
        echo "MIERCOLES";
    }elseif($dia == 4){
        echo "JUEVES";
    }elseif($dia == 5){
        echo "VIERNES";
    }else{
        echo "FIN DE SEMANA";
    }

    echo "<hr>";

    //SWITCH
    $dia1 = 4;

    switch($dia1){
        case 1:
            echo "LUNES";
            break;
        case 2:
            echo "MARTES";
            break;
        case 3:
            echo "MIERCOLES";
            break;
        case 4:
            echo "JUEVES";
            break;
        case 5:
            echo "VIERNES";
            break;
        default:
        echo "ES FIN DE SEMANA";

    }

    echo "<hr>";
    //EJEMPLO 5

    $edad1 = 18;
    $edad2 = 64;
    $edadOficial = 20;

    if($edadOficial >= $edad1 && $edadOficial <= $edad2){
        echo "ESTA EN EDAD DE TRABAJAR";
    }else{
        echo "NO PUEDE TRABAJAR";
    }

    echo "<hr>";

    $pais ="Francia";

    if($pais == "Mexico" || $pais == "España" || $pais == "Argentina"){
        echo "EN ESTE PAIS SE HABLA ESPAÑOL";
    }else{
        echo "EN ESTE PAIS NO SE HABLA ESPAÑOL";
    }

    echo "<hr>";
    //GOTO
    //SE SALTA LAS INSTRUCCIONES Y VA DIRECTO 
    //A LA MARCA (PUEDE TENER CUALQUIER NOMBRE)
    goto marca;
    echo "<h3>INSTRUCCION 1</h3>";
    echo "<h3>INSTRUCCION 2</h3>";
    echo "<h3>INSTRUCCION 3</h3>";
    echo "<h3>INSTRUCCION 4</h3>";

    marca:
    echo "<h1>Me he saltado 4 echos</h1>";

?>
<!--DOCUMENTO CREADO POR-->
<!--JAHIR GUZMAN        -->
<!--CON FECHA 08-04-2024-->