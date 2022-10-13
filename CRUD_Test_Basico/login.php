<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

//conectatu
$mysqli = new mysqli("localhost", "root", "", "test");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
///consulta where nombre $user and pass $pass
if (! ($sentencia = $mysqli->prepare("SELECT * FROM test WHERE nombre= ? && pass= ?"))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}
if (! $sentencia->bind_param("si", $user, $pass)) {
    echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
}
if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}
$resultado = $sentencia->get_result();
//lerro bat badator pass eta user zuzena beraz sistemara
//bestela loginera

if($resultado->num_rows==1){
    echo "user y pass correctos";
    session_start();
    $_SESSION['user']=$user;
   header("Location: select_test.php");
}else{
    header("Location: loginform.php");
}