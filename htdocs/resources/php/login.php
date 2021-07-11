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
	      header ("Location: index.php");
    };
  } else {

  if (isset($_POST['enviar'])) {
    if (strlen($_POST['user']) > 1
   	&& strlen($_POST['contraseña']) > 1){
    $records = $conn->prepare('SELECT id, nombre, nuip, email, numero, contraseña FROM usuarios WHERE email = :user OR nuip = :user');
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    	if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contraseña'])) {
    		?>
    		<script type="text/javascript">
				function redireccionar(){
				  window.location.assign("index.php")
				} 
				setTimeout ("redireccionar()", 5);
				</script>
    			<h3 class="ok">¡Bienvenido!<h3>
    		<?php
      	$_SESSION['user_id'] = $results['id'];

      	
    	}else{
    		?>
    			<h3 class="bad">¡Ups las credenciales ingresadas no coinciden!<h3>
    		<?php
    	}
   	}
  }
}
?>