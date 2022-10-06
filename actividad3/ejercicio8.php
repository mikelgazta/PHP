<?php
$pares = $_GET['true'];
$num = rand(1, 99);

echo "numero: " . $num . "<br>";

for ($i = 1; $i <= $num; $i ++) {
    if (($pares) && ($i % 2 == 0)) {
        echo $i . "<br>";
    }if ((!$pares)&&($i % 2 !== 0)){
        echo $i."<br>";
    }
}
?>