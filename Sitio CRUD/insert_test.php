
<?php
//http://localhost/Sitio%20CRUD/insert_test.php?dni=45152698d&nombre=mikel&apellidos=gazta&correo=mikelgazta&telf=654897456

if (isset($_GET['dni']) && isset($_GET['nombre']) && isset($_GET['apellidos']) && isset($_GET['correo']) && isset($_GET['telf'])) {
    $dni= $_GET['dni'];
    $nombre = $_GET['nombre'];
    $apellidos =$_GET['apellidos'];
    $correo = $_GET['correo'];
    $telf = $_GET['telf'];

    $mysqli = new mysqli("localhost", "root", "", "crud_alumnos");
    
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    /* Sentencia preparada, etapa 1: preparación */
    if (!($sentencia = $mysqli->prepare("INSERT INTO alumnos(dni, nombre, apellidos, correo, telf) VALUES (?, ?, ?, ?, ?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    
    /* Sentencia preparada, etapa 2: vinculación y ejecución */
    if (!$sentencia->bind_param("sssss", $dni, $nombre, $apellidos, $correo, $telf)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    if (!$sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    
    /* se recomienda el cierre explícito */
    $sentencia->close();
    
    /* Sentencia no preparada */
     $resultado = $mysqli->query("SELECT * FROM alumnos");
     var_dump($resultado->fetch_all());
     
}else{
    echo("<br>Error en parametros<br>");
    
}



?>

