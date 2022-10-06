<?php

$productos = array("Zapa1","Zapa2","Zapa3","Zapa4","Zapa5");
$precios = array("1","2","3","4","5");

/*for($i = 0; $i < 5;$i++){
    echo "Producto: ".$productos[$i].", Precio: ".$precios[$i]."<br>";
}*/
for($i = 0 ;$i<count($productos);$i++){
    echo "Producto: ".$productos[$i].", Precio: ".$precios[$i]."<br>";
}


?>