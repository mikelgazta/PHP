<?php

class ordenador{
    public $SO;
    public $CodHZ;
    public $tipo = false;
    
    function __construct($SO, $CodHZ, $tipo) {
        $this->SO = $SO;
        $this->CodHZ = $CodHZ;
        $this->tipo = $tipo;
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
    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    
    public function imprimir(){
        echo "<h2>Bienvenido a su ordenador</h2>";
        echo "<b>Sistema Operativo: </b>" . $this->SO . "<br>";
        echo "<b>Codigo HZ: </b>" . $this->CodHZ . "<br>";
        echo "<b>Sobremesa | Portatil : </b>" . $this->tipo;
    }
    public function imprimirMod(){
        echo "<h2>Se han modificado los datos correctamente,<br> los nuevos datos son:</h2>";
        echo "<b>Sistema Operativo: </b>" . $this->SO . "<br>";
        echo "<b>Codigo HZ: </b>" . $this->CodHZ . "<br>";
        echo "<b>Sobremesa | Portatil : </b>" . $this->tipo;
    }
    public function imprimirBorrado(){
        echo "<h2>Se ha borrado con exito el ordenador:</h2>";
        echo "<b>Sistema Operativo: </b>" . $this->SO . "<br>";
        echo "<b>Codigo HZ: </b>" . $this->CodHZ . "<br>";
        echo "<b>Sobremesa | Portatil : </b>" . $this->tipo;
    }
    
    public static function guardarSerializado($nombreFichero, $ordenadores){
        $s = serialize($ordenadores);
        file_put_contents($nombreFichero, $s);
    }
    
    public static function getOrdenadoresUnselizados($nombreFichero){
        $s = file_get_contents($nombreFichero);
        $ordenadores = unserialize($s);
        return $ordenadores;
    }
}