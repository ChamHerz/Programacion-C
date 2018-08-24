<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 05</title>
</head>
<body>
	<?php
		$numeroRand = rand(1,100);

		echo utf8_encode("El número aleatorio es: ".$numeroRand."</br>");
		if ( $numeroRand >= 50)
		{
			echo utf8_encode("El número aleatorio mayor o igual a 50 </br>");
		}
		else
		{
			echo utf8_encode("El número aleatorio es menor a 50 </br>");
		}
	?>
</body>
</html>