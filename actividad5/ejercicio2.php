<html>
	<body>
		<form>
			<fieldset>
				<h1>Datos personales</h1>
				Su nombre es <b><?php echo $_GET["nombre"]; ?><br></b>
				Sus apellidos son <b> <?php echo $_GET["apellido"]?></b><br>
				Su edad es <b><?php echo $_GET["edad"]?></b><br>
				Su peso es <b><?php echo $_GET["peso"]?></b><br>
				Es un <b><?php echo $_GET["sexo"]?></b><br>
				Su estado civil:<b><?php echo $_GET["estado_civil"]?></b><br>
				Le gusta<b><?php $name = $_GET["aficiones"];
				foreach ($name as $aficiones){
				    echo $aficiones.", ";
				}
				?></b><br>
				<a href="ejercicio2.html">Volver al formulario</a>
			</fieldset>	
		</form>
	</body>
</html>




