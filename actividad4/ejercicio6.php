<?php

$valores = array();
$suma = 0;
for ($i = 0; $i < 10; $i++) {
    $num_aleatorio = rand(0, 99);
    array_push($valores, $num_aleatorio);
    $suma = $suma+$valores[$i];
    echo $valores[$i]."<br/>";
}
$media = $suma/10;
echo "La media es: ". $media ."</br>";

?>