<?php 
//crearemos nuestra conexion a nuestra base de datos
$servidor="localhost";
$usuarios="root";
$contraseña="";
$basedatos="bd_crud";

$conexion=mysqli_connect($servidor,$usuarios,$contraseña,$basedatos);
if(!$conexion){
  die("upss la conexion fallo".mysqli_connect_error());
}
?>