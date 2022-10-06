<?php

class ordenador{
    public $SO;
    public $CodHZ;
    public bool $esSobremesa;
    
    function __construct($SO, $CodHZ, $esSobremesa) {
        $this->SO = $SO;
        $this->CodHZ = $CodHZ;
        $this->esSobremesa = $esSobremesa;
    }
    
    public function getSO()
    {
        return $this->SO;
    }

    public function getCodHZ()
    {
        return $this->CodHZ;
    }

    public function setSO($SO)
    {
        $this->SO = $SO;
    }

    public function setCodHZ($CodHZ)
    {
        $this->CodHZ = $CodHZ;
    }
}