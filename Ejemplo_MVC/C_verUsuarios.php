<?php

use Models\M_Usuario;

require('Models/M_Usuario.php');

$con = new M_Usuario();

$usuarios = $con->getUsers();
$con->close();

require ('Views/V_verUsuarios.php');

?>