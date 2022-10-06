<?php

include 'ordenador.php';
$ordenador1 = new ordenador('Windows 7', '1234', true);
$ordenador2 = new ordenador('Windows 10', '4321', false);
$ordenador3 = new ordenador('Windows 11', '1432', false);

$ordenadores = array($ordenador1, $ordenador2, $ordenador3);

foreach ($ordenadores as $ordenador) {
    $ordenador->imprimir();
}

// La etiqueta pre hace que el contenido aparezca listado y de forma clara
/*
 echo('<pre>');
 print_r($ordenadores);
 echo('</pre>');
 */