<?php
if (isset($_POST['dni']) && isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['correo']) && isset($_POST['telf']) && isset($_POST['profesor'])) {
    $dni=$_POST['dni'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telf = $_POST['telf'];
    $profesor = $_POST['profesor'];

    $mysqli = new mysqli("localhost", "root", "", "crud_alumnos");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("UPDATE alumnos SET nombre=?, apellidos=?, correo=?, telf=?, profesor=?  WHERE dni=?"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("ssssis", $nombre, $apellidos, $correo, $telf, $profesor, $dni)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
//     $resultado = $mysqli->query("SELECT * FROM test");
//     var_dump($resultado->fetch_all());
    header("location: select_test.php");
}else{
    echo("<br>Error en parametros<br>");
    
}


?>
