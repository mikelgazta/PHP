
<?php
$mysqli = new mysqli("localhost", "root", "", "crud_alumnos");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

/* Sentencia no preparada */
$resultado = $mysqli->query("SELECT * FROM alumnos");



/* se recomienda el cierre explícito */

?>

<html>
<style>
.button {
  font: 13px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>
<body>
	<h1>Todos los alumnos:</h1>
	<?php 
	while ($row = $resultado->fetch_assoc()) {
	    $dni=$row['dni'];
	    echo($row['dni'] . " - " . $row['nombre'] . " - " . $row['apellidos'] . " - " . $row['correo'] . " - " . $row['telf']." - " . $row['profesor']. " <button onclick=\"location.href='delete_test.php?dni=$dni'\">Borrar</button> ". " <button onclick=\"location.href='formulario.php?dni=$dni'\">Editar</button>");
	    
	    //printf("%s - %s\n", $row["dni"], $row["nombre"], $row["apellidos"], $row["correo"], $row["telf"]);
	    echo "<br>";
	    
	}
	$mysqli->close();
	?>
	<br>
	<a href="formulario.php" class="button">Añadir alumno</a>
</body>
</html>
