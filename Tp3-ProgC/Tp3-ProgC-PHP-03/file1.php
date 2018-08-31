<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
	<title>Destino</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		session_start();
		$_SESSION["variable"] = "soy una variable de session";
		echo "Se guardo una variable de session <br />";
	?>
	<a href="file2.php">ir a file2.php para ver la variable de session</a>
</body>
</html>