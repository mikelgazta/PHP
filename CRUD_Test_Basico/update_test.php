<?php
session_start();
if (! isset($_SESSION['user'])) {
    header("Location: loginform.php");
    exit();
} else {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['pass'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $pass = $_POST['pass'];
        

        $mysqli = new mysqli("localhost", "root", "", "test");
        if ($mysqli->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        /* Sentencia preparada, etapa 1: preparación */
        if (! ($sentencia = $mysqli->prepare("UPDATE test SET nombre=?, pass=? WHERE id=?"))) {
            echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        }

        /* Sentencia preparada, etapa 2: vinculación y ejecución */
        if (! $sentencia->bind_param("sii", $nombre, $pass, $id)) {
            echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
        }

        if (! $sentencia->execute()) {
            echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
        }

        /* se recomienda el cierre explícito */
        $sentencia->close();

        /* Sentencia no preparada */
        // $resultado = $mysqli->query("SELECT * FROM test");
        // var_dump($resultado->fetch_all());
        header("Location: select_test.php");
    } else {
        echo ("<br>Error en parametros<br>");
    }
}
?>