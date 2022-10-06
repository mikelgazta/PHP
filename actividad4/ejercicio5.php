<?php

$valores = array();

for ($i = 0; $i < 10; $i++) {
    $num_aleatorio = rand(0, 99);
    array_push($valores, $num_aleatorio);
    $min = min($valores);
    echo $valores[$i]."<br/>";
}
echo "El numero menor es: ". $min ."</br>";

?>