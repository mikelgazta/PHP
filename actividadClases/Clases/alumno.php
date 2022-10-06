<?php

class alumno extends persona{
    private $codMatricula;
    private $ciclo;
    
    function __construct($name, $dni, $email, $codMatricula, $ciclo) {
        $this->codMatricula = $codMatricula;
        $this->ciclo = $ciclo;
    }
    
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    public function getCiclo()
    {
        return $this->ciclo;
    }

    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }
}