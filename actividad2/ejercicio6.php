<?php
$num1 = 3;
$num2 = 2;

if(($num1+$num2)>($num1*$num2)){
    echo "La suma es mayor que el producto";
}
elseif (($num1+$num2)<($num1*$num2)) {
    echo "El producto es mayor que la suma";
}else 
    echo "La suma y el producto son iguales";
?>