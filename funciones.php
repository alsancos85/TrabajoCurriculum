<?php
   session_start();
      require_once("comun.php");

   
// Verificar si la solicitud es de tipo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
	$id= $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $edad = $_POST["edad"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];


    // Actualizar los datos en la base de datos
    $sql = "UPDATE datos_personales SET 
            Nombre = '$nombre',
            Apellidos = '$apellido',
            Edad = '$edad',
            Direccion = '$direccion',
            Telefono = '$telefono'
            WHERE Id = $id";

    $resultado = $conexion->query($sql);

    // Verificar si la consulta se ejecutó con éxito
    if ($resultado) {
        echo "Datos actualizados con éxito.";
    } else {
        echo "Error al actualizar los datos: " . $conexion->error;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();
} else {
    // Si no es una solicitud POST, redirigir o manejar de acuerdo a tus necesidades
    echo "Acceso no permitido.";
}
?>
