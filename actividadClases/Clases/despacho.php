<?php

class despacho extends espacio{
    private $nombre;
    
    function __construct($puntoWifi, $puntosRed, $nombre) {
        $this->nombre = $nombre;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}