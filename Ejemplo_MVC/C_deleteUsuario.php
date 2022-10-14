<?php
use Models\M_Usuario;

require_once 'Models/Usuario.php';
require_once 'Models/M_Usuario.php';


$username = $_GET['username'];

$con = new M_Usuario();

$con->deleteUsuario($username);

$con->close();

header("Location: C_verUsuarios.php");

exit();