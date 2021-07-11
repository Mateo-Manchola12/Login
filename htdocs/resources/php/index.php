<?php 
	include("con_db.php");

	session_start();

	if (isset($_SESSION['user_id'])) {
	    $records = $conn->prepare('SELECT id, nombre, nuip, email, numero, contraseña FROM usuarios WHERE id = :id');
	    $records->bindParam(':id', $_SESSION['user_id']);
	    $records->execute();
	    $results = $records->fetch(PDO::FETCH_ASSOC);

	    $user = null;

	    if (count($results) > 0) {
	      $user = $results;
    }
  } else {
  	header ("Location: login.php");
  }
?>