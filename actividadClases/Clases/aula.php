<?php

class aula extends espacio{
    private string $numero;
    private bool $proyector;
    private bool $pizarraDigital;
    private bool $pantallaTactil;
    
    function __construct($puntoWifi, $puntosRed, $numero, $proyector, $pizarraDigital, $pantallaTactil) {
        $this->numero = $numero;
        $this->proyector = $proyector;
        $this->pizarraDigital = $pizarraDigital;
        $this->pantallaTactil = $pantallaTactil;
    }
    
    public function getNumero()
    {
        return $this->numero;
    }

    public function getProyector()
    {
        return $this->proyector;
    }

    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;
    }

    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;
    }
}