<?php 
$usu_login = $_POST['usu_login'];
$usu_clave = $_POST['usu_clave'];



require "conexion.php";
$sql= "SELECT 1 FROM usuarios WHERE 
			usu_login='".$usu_login."' 
			AND usu_clave='".$usu_clave."'";

$resultado = mysqli_query($link,$sql) or die(mysqli_error($link));
$chequeo = mysqli_num_rows($resultado);
//Rutina de autenticacion
session_start();
$_SESSION['login'] = 1;

if ($chequeo ==1) {

header("location:form-login.php?error=1");

}
else {
 	# code...
 
	header("location: admin.php");
}


 ?>