<?php

$productos = array("Zapa1","Zapa2","Zapa3","Zapa4","Zapa5");
$precios = array(10,20,30,40,50);

for($i = 0;$i<count($productos);$i++){ 
    $rebaja = $precios[$i]-($precios[$i]*0.2);
    echo "Producto: ".$productos[$i].", Precio viejo: ".$precios[$i].", Precio nuevo: ".$rebaja."<br>";
}

?>