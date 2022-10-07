<!DOCTYPE html>
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
<?php
if (isset($_GET['dni'])) {
    $mysqli = new mysqli("localhost", "root", "", "crud_alumnos");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    /* Sentencia no preparada */
    $dni = $_GET['dni'];

    $alumno = $mysqli->query("SELECT * FROM alumnos WHERE dni='$dni'");
    
    while ($row = $alumno->fetch_assoc()) {
        $dni=$row['dni'];
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $correo = $row['correo'];
        $telf = $row['telf'];
        echo($row['dni'] . " - " . $row['nombre'] . " - " . $row['apellidos'] . " - " . $row['correo'] . " - " . $row['telf']. " <button onclick=\"location.href='delete_test.php?dni=$dni'\">Borrar</button> ". " <button onclick=\"location.href='formulario.php?dni=$dni'\">Editar</button>");
        
        //printf("%s - %s\n", $row["dni"], $row["nombre"], $row["apellidos"], $row["correo"], $row["telf"]);
        echo "<br>";
        
    }
}
?>
<form action=<?php echo (isset($_GET['dni']) ? "update_test.php" : "insert_test.php") ?> method="post">
		DNI: <input type="text" name="dni" value=<?php echo $dni??''?>><br>
		<br> Nombre: <input type="text" name="nombre" value=<?php echo $nombre??''?>><br>
		<br> Apellidos: <input type="text" name="apellidos" value=<?php echo $apellidos??''?>><br>
		<br> Correo: <input type="email" name="correo"  value=<?php echo $correo??''?>><br>
		<br> Telf.: <input type="tel" name="telf" value=<?php echo $telf??''?>><br>
		<br> <input type="submit" value="Enviar"> <input type="reset"
			name="reset" id="reset"> <a href="select_test.php" class="button">Volver</a>
	</form>

</body>
</html>
