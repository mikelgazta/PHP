<?php

$persona1 = array("Nombre" => "Mikel", "Apellido" => "Gazta", "DNI" => "45678912S");
$persona2 = array("Nombre" => "David", "Apellido" => "Barberio", "DNI" => "12345687K");

foreach ($persona1 as $dato => $value){
    echo $dato.": ".$value."; ";
}
echo "<br>";
foreach ($persona2 as $dato => $value){
    echo $dato.": ".$value."; ";
}

?>