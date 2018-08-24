<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>PHP - 10</title>
</head>
<body>
	<?php
		for ( $numero = 1;  $numero <= 10 ;  $numero++ )
		{ 
			if ( $numero == 1 | $numero == 2 | $numero == 5 )
			{
				echo utf8_encode($numero."</br>");
			}
		}
	?>
</body>
</html>