<?php
session_start();
if (! isset($_SESSION['user'])) {
    header("Location: loginform.php");
} else {

    $id = $_GET['id'];
    $mysqli = new mysqli("localhost", "root", "", "test");
    $resultado = $mysqli->query("select * from test where id=" . $id);

    $usuario = $resultado->fetch_assoc();

    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar</title>
</head>

<body>
	<form action="update_test.php" method="post">
		<input type="number" name="id" placeholder="id"
			value="<?=$usuario['id']?>" readonly> <input type="text"
			name="nombre" placeholder="nombre" value="<?=$usuario['nombre']?>">
			<input type="number" name="pass" placeholder="password" value="<?=$usuario['pass']?>">
			<input type="submit" value="Guardar">
	</form>
</body>

</html>
<?php

?>