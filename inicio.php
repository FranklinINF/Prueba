<?php
session_start();
include_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $sql);

if(mysqli_num_rows($resultado) == 1){
$_SESSION['usuario'] = $usuario;
header("Location: index.php");
exit();
} else {
  $error = "Nombre de Usuario o contraseña incorrectos.";
}

}

mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="inicio.css">
  </head>
  <body>
<div class="wrapper">
        <form action="" class="form" method="POST">
            <h1 class="title">Inicio</h1>
            <div class="inp">
                <input type="text" name="usuario" id="usuario" class="input" placeholder="Usuario" >
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="contrasena" id="contrasena" class="input" placeholder="contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button class="submit">Iniciar sesión</button><br>
            <?php if (isset($error)) {?>
        <p><?php echo $error; ?></p>
      <?php } ?>
            <p class="footer">¿No tienes cuenta?  <a href="registro.php" class="link">Crear Cuenta</a></p>  
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">Bienvenidos</h1><br>
            <p class="para"></p>
        </div>
    </div>

  </body>
</html>