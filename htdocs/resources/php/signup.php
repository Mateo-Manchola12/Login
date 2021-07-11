<?php
  include("con_db.php");

  if (isset($_POST['enviar'])) {
    if (strlen($_POST['correo']) > 1
    && strlen($_POST['nombre']) > 1
    && strlen($_POST['nuip']) > 1 
    && strlen($_POST['telefono']) > 1 
    && strlen($_POST['contraseña']) > 1
    && strlen($_POST['confirmar_contraseña']) > 1
    && $_POST['contraseña'] == $_POST['confirmar_contraseña']
    && is_numeric($_POST['telefono'])) {
      $nuip = trim($_POST['nuip']);
      $correo = trim($_POST['correo']);
      $records = $conn->prepare("SELECT id, nombre, nuip, email, numero, contraseña FROM usuarios WHERE email = '$correo OR nuip = '$nuip'");
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);
      if (count($results) < 1) {
        $nuip = trim($_POST['nuip']);
        $correo = trim($_POST['correo']);
        $nombre  = trim($_POST['nombre']);
        $telefono = trim($_POST['telefono']);
        $contraseña = password_hash(trim($_POST['contraseña']), PASSWORD_BCRYPT);
        $consulta = "INSERT INTO usuarios(nombre, nuip, email, numero, contraseña) VALUES ('$nombre','$nuip', '$correo','$telefono','$contraseña')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
          ?>
            <h3 class="ok">¡Registro completado correctamente!</h3>
          <?php
        } else {
          ?>
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
          <?php
          }
        }else{
          ?>
            <h3 class="bad">¡Ups este usuario ya se encuentra registrado!</h3>
          <?php
        }
      } else {
        if (strlen($_POST['nombre']) > 1
        && strlen($_POST['nuip']) > 1
        && strlen($_POST['correo']) > 1 
        && strlen($_POST['telefono']) > 1 
        && strlen($_POST['contraseña']) > 1
        && strlen($_POST['confirmar_contraseña']) > 1
        && $_POST['contraseña'] != $_POST['confirmar_contraseña']) {
          ?>
            <h3 class="bad">¡Ups las contraseñas ingresadas no coinciden!</h3>
          <?php
        }else {
        ?>
            <h3 class="bad">¡Ups rellene todos los campos para completar el registro!</h3>
          <?php
        }
      } 
    } 
?>