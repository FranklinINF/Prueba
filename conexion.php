<?php
//Coneción a la base de datos// 
$servidor="localhost";
$usuario="root";
$contrasena="";
$database="bd_crud";
$conexion=mysqli_connect($servidor,$usuario,$contrasena,$database);
if(!$conexion){
	die("Error al conectarse".msqli_connect_error());
}
?>