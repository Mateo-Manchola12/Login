<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="resources/css/base.css">
		<link rel="stylesheet" type="text/css" href="resources/css/forms.css">
		<link rel="icon" href="resources/multimedia/icon.png">
		<meta charset="utf-8">
		<?php 
			include("resources/php/index.php");
		?>
		<title>Inicio</title>
	</head>
	<body>
		 <br> Welcome <?= $user['nombre']; ?>
		 <a href="resources/php/logout.php"> hola </a>
	</body>
</html>