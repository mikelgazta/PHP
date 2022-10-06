<?php

class docente extends persona{
    private $sueldo;
    
    function __construct($name, $dni, $email, $sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
}