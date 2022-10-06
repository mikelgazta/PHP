<html>
	<body>
	<?php 
	$num1="";
	$num2="";
	
	$suma=$_POST['suma'];
	
	$resta=$_POST['resta'];
	$multi=$_POST['multi'];
	$div=$_POST['div'];
	
	if($suma)
	{
	    $num1 = $_POST
	    ['num1'];
	    $num2 = $_POST
	    ['num2'];
	    $suma = $num1 + $num2;
	    echo "La suma de ".$num1." y ".$num2." es ".$suma."<br>";
	}
	elseif ($resta)
	{
	    $num1 = $_POST
	    ['num1'];
	    $num2 = $_POST
	    ['num2'];
	    $resta = $num1 - $num2;
	    echo "La resta de ".$num1." y ".$num2." es ".$resta;
	}
	elseif ($multi)
	{
	    $num1 = $_POST
	    ['num1'];
	    $num2 = $_POST
	    ['num2'];
	    $resta = $num1 * $num2;
	    echo "La multiplicacion de ".$num1." y ".$num2." es ".$resta;
	}
	elseif ($div)
	{
	    $num1 = $_POST
	    ['num1'];
	    $num2 = $_POST
	    ['num2'];
	    $resta = $num1 / $num2;
	    echo "La div de ".$num1." y ".$num2." es ".$resta;
	}
	?>
	
	</body>
</html>



