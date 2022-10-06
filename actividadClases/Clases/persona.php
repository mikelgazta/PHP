<?php

abstract class persona{
    private $name;
    private $dni;
    private $email;
    
    function __construct($name, $dni, $email) {
        $this->name = $name;
        $this->dni = $dni;
        $this->email = $email;
    }
}