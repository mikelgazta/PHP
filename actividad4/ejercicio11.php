<?php

$dias = array("Lunes" => 1, "Martes" => 2, "Miercoles" => 3, "Jueves" => 4,
    "Viernes" => 5, "Sabado" => 6, "Domingo" => 7);
$suma = 0;
foreach ($dias as $dia => $value){
    echo $dia.": ".$value;
    $suma = $suma + $value;
    echo "<br>";
}
echo "La suma de los valores: ".$suma.", ";
echo "la media de los valores: ".$suma/7;

?>