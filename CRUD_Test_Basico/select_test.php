<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: loginform.php");
}
$mysqli = new mysqli("localhost", "root", "", "test");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM test");

// mostrar resultado
while ($row = $resultado->fetch_assoc()) {
    echo ($row['id'] . " - " . $row['nombre'] . " - " . $row['pass']." ");
    echo '<a href="update_form.php?id=' . $row['id'] . '">Modificar</a>';
    echo ' - ';
    echo '<a href="delete_test.php?id=' . $row['id'] . '">Eliminar</a>';
    // printf("%s - %s\n", $row["id"], $row["nombre"]);
    echo "<br>";
}

/* se recomienda el cierre explícito */
$mysqli->close();

?>
<br>
<a href="insert_form.php">Anadir alumno</a>
<a href="logout.php">Cerrar sesion</a>