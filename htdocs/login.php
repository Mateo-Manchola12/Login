<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="resources/css/base.css">
		<link rel="stylesheet" type="text/css" href="resources/css/forms.css">
		<link rel="icon" href="resources/multimedia/icon.png">
		<meta charset="utf-8">
		<?php 
			include("resources/php/login.php");
		?>
		<title>Iniciar sesión</title>
	</head>
	<body>
		<header>
			<nav>
				
			</nav>
		</header>
		<form method="post">
			<h2>Iniciar sesión</h2>
			<h3>Numero de cedula o correo electronico</h3>
			<input type="text" name="user" placeholder="Numero de cedula o correo electronico">
			<h3>Contraseña</h3>
			<input type="password" name="contraseña" placeholder="Contraseña">
			<input type="submit" name="enviar" value="Ingresar">
			<a href="signup.php">
				<h4>Registrarse</h4>
			</a>
		</form>
	</body>
</html>