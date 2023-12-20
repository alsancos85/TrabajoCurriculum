<?php
   session_start();
   require_once("comun.php");

$servidor = "db5014890765.hosting-data.io";
$usuario = "dbu2502229";
$contrasena = "Alberto_1985.";
$BD = "dbs12369947";
$conexion = new mysqli($servidor, $usuario, $contrasena, $BD);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

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