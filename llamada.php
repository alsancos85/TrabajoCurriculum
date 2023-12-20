<?php
   session_start();
   require_once("comun.php");



$email=$_POST["email"];
$pass=$_POST["pass"];
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0){

$fila = $resultado->fetch_assoc();
$emailResultado = $fila['email'];
$_SESSION['email']=$emailResultado; 
$_SESSION['id']=$fila['id'];

    header('Location: llamada2.php');

}else{
	echo 'Introduce bien los datos';
}



?>