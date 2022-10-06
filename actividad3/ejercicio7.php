<?php

$primerNum = $_GET['primerNum'];
$ultimoNum = $_GET['ultimoNum'];

for($i = $primerNum; $primerNum <= $ultimoNum; $primerNum++,$i = $i+$primerNum){  
}
echo "La suma es ".$i;




?>