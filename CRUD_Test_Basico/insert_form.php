<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: loginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar</title>
</head>

<body>
    <form action="insert_test.php" method="post">
        <input type="number" name="id" placeholder="id"><br><br>
        <input type="text" name="nombre" placeholder="nombre"><br><br>
        <input type="number" name="pass" placeholder="password"><br><br>
        <input type="submit" value="Guardar">
        <a href="select_test.php">Volver</a>
    </form>
</body>

</html>
