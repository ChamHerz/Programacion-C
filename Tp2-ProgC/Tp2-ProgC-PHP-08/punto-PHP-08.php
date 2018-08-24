<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 08</title>
</head>
<body>
	<?php
		$numeroRand = rand(0,1);

		$nombre = ["Juan","John"];
		$saludo = ["Hola","Hello"];

		echo utf8_encode($saludo[$numeroRand]." ".$nombre[$numeroRand]."</br>");
	?>
</body>
</html>