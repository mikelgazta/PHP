<?php

$valores = array();
echo "Relacion de numeros aleatorios <br>";
for ($i = 0; $i < 10; $i++) {
    $num_aleatorio = rand(1, 200);
    array_push($valores, $num_aleatorio);

    echo $valores[$i]." ";
}
echo "<br>Otra forma de visualizar los datos de un array<br>";
print_r($valores);
echo "<br>Relacion de numeros aleatorios al reves<br>";
for($j=9;$j>=0;$j--){
    echo $valores[$j]." ";
}


?>