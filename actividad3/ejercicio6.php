<?php

$letra = "o";
$lineas=$_GET['parametro'];
for($i = 0 ; $i<$lineas ;$i++){
    for($j=0; $j<=$i;$j++){
        echo $letra;
    }
    echo "<br>";
}



?>