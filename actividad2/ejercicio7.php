<?php
$nota = 1;

if($nota >= 1 && $nota <= 4.9){
    echo "Suspenso";
}elseif ($nota >= 5  && $nota <= 5.9){
    echo "Suficiente";
}elseif ($nota >= 6  && $nota <= 6.9){
    echo "Bien";
}elseif ($nota >= 7  && $nota <= 7.9){
    echo "Muy Bien";
}elseif ($nota >= 9  && $nota <= 10){
    echo "Sobresaliente";
}else{
    echo "Error";
}

?>