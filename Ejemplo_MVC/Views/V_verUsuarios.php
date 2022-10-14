<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Lista de usuarios</title>
</head>
	<body>
		<a href="C_mostrarInsertUsuarios.php">Insertar usuario</a>
   		<table>
   			<thead>
   				<tr>
   					<td>Usuarios</td>
   					<td>Constraseña</td>
   					<td>Nombre real</td>
   				</tr>
   			</thead>
   			<tbody>
   			<?php 
   			foreach ($usuarios as $usuario){
   			    
   			    $username = $usuario->getUsername();
   			    echo "<tr>";
   			    echo "<td>" . $usuario->getUsername(). "</td>";
   			    echo "<td>" . $usuario->getPassword() . "</td>";
   			    echo "<td>" . $usuario->getNombre() . "</td>";
   			    echo "<td><a href=C_deleteUsuario.php?username=$username>Borrar</a></td>";
   			    echo "</tr>";
   			}
   			?>
   			</tbody>
   		</table>
    </body>
</html>