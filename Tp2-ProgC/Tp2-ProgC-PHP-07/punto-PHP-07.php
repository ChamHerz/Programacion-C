<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 07</title>
</head>
<body>
	<?php
		$numeroRand = rand(1,3);

		echo utf8_encode("El número aleatorio es: ".$numeroRand."</br>");
		switch ($numeroRand) {
			case 1:
				echo utf8_encode("Uno. </br>");
				break;
			case 2:
				echo utf8_encode("Dos. </br>");
				break;
			case 3:
				echo utf8_encode("Tres. </br>");
				break;
		}
	?>
</body>
</html>