<?php
include_once 'conexion.php';
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$email=$_POST['email'];

$sql="INSERT INTO usuarios (nombres, apellidos, usuario, contrasena, email)VALUES('$nombres','$apellidos', '$usuario','$contrasena','$email')";
    if(mysqli_query($conexion,$sql)){
         header("Location: inicio.php");
         exit();
    }
    else{
        echo 'Ocurrio un error' .mysqli_error($conexion);   
    }

    mysqli_close($conexion);
?>