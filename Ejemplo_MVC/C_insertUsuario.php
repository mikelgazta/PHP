<?php

use Models\M_Usuario;
use Models\Usuario;
require_once 'Models/Usuario.php';
require_once 'Models/M_Usuario.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nombre = $_POST['nombre'];

$con = new M_Usuario();

$usuario = new Usuario($username, $password, $nombre);

$con->insertUsuario($usuario);
$con->close();

header("Location: C_verUsuarios.php");
exit();
?>