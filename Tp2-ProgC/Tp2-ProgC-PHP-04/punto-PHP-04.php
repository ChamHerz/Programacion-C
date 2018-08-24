<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 04</title>
</head>
<body>
	<?php
		$edadAlumno1 = 31;
		$edadAlumno2 = 25;
		$edadAlumno3 = 26;
		$edadAlumno4 = 29;

		$promedioEdadesClase = ( $edadAlumno1 + $edadAlumno2 + $edadAlumno3 + $edadAlumno4 ) / 4;

		echo utf8_encode("Edad alumno 1: ".$edadAlumno1."</br>");
		echo utf8_encode("Edad alumno 2: ".$edadAlumno2."</br>");
		echo utf8_encode("Edad alumno 3: ".$edadAlumno3."</br>");
		echo utf8_encode("Edad alumno 4: ".$edadAlumno4."</br>");
		echo utf8_encode("El promedio de edades de la clase es: ".$promedioEdadesClase."</br>");
	?>
</body>
</html>