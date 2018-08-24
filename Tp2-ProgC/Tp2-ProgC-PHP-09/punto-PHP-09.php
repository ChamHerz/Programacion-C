<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 09</title>
</head>
<body>
	<?php
		for ( $numero = 1;  $numero <= 10 ;  $numero++ ) { 
			echo utf8_encode($numero."</br>");
		}
	?>
</body>
</html>