<?php
/*
EJERCICIO 6
IMPRIME POR PANTALLA TODAS LAS TABLAS DE MULTIPLICAR
DEL 1 AL 10 EN UNA TABLA HTML.
*/

echo "<table border='1'>";//inicio de la tabla

echo "<tr>";//inicio filla 1 de celdas
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo "<td>Tabla del $cabecera</td>";
    } 

echo "</tr>";//cierre de la fila 1 de celdas

echo "<tr>";//Inicio de la fila 2 de celdas
    for($i = 1; $i <= 10; $i++){
        echo "<td>";
            for($x = 1; $x <= 10; $x++){
                echo"$i x $x = ".($i*$x)."<br/>";

            }
        echo "</td>";
    }

echo "</tr>";//Cierre de la fila 2 de celdas

echo "</table>";//fin de la tabla