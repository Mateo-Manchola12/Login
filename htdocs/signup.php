<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="resources/css/base.css">
		<link rel="stylesheet" type="text/css" href="resources/css/forms.css">
		<link rel="icon" href="resources/multimedia/icon.png">
		<meta charset="utf-8">
		<?php 
			if (isset($_SESSION['user_id'])) {
	    	header ("Location: index.html");
  			};
			include("resources/php/signup.php");
		?>
		<title>Registrarse</title>
	</head>
	<body>
		<header>
			<nav>
				
			</nav>
		</header>
		<form method="post">
			<h2>Registrarse</h2>
			<h3>Nombre</h3>
			<input type="text" name="nombre" placeholder="Nombre">
			<h3>Numero de cedula</h3>
			<input type="text" name="nuip" placeholder="Numero de cedula">
			<h3>Correo electronico</h3>
			<input type="email" name="correo" placeholder="Correo">
			<h3>Numero de telefono</h3>
			<input type="tel" name="telefono" placeholder="Telefono">
			<h3>Contraseña</h3>
			<input type="password" name="contraseña" placeholder="Contraseña">
			<h3>Confirme su contraseña</h3>
			<input type="password" name="confirmar_contraseña" placeholder="Confime su contraseña">
			<input type="submit" name="enviar" value="Registrarse">
			<a href="login.php">
				<h4>Iniciar sesión</h4>
			</a>
		</form>
	</body>
</html>