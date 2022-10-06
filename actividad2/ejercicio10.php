<?php

$fechaSalida = new DateTime('2022-09-18 09:15:25');
$fechaActual = new DateTime('now');

echo "La fecha de salida es " . $fechaSalida->format('Y-m-d H:i:s');
echo "<br>";
echo "La fecha de actual es " . $fechaActual->format('Y-m-d H:i:s');
echo "<br>";
echo "<br>";

//var_dump($fechaActual);

$interval = $fechaSalida->diff($fechaActual);

echo "<h2> Para poder ir de vacacaiones me quedan >> ";
echo $interval->format('%d dias, %H horas, %i minutos');
echo "</h2>";

?>