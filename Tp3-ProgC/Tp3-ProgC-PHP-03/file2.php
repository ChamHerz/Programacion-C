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
		echo $_SESSION["variable"];
	?>
</body>
</html>