<?php
// Conectar a la base de datos
$conexion = new mysqli('localhost', 'usuario', 'contraseña', 'base3');

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: ". $conexion->connect_error);
}

// Recoger los datos del formulario
$usuario = $_POST['username'];
$contraseña = $_POST['password'];

// Preparar la consulta SQL para insertar el nuevo usuario
$sql = "INSERT INTO usuarios3 (usuario, contraseña) VALUES (?,?)";

// Preparar la declaración
$consulta = $conexion->prepare($sql);

// Enlazar los parámetros a la declaración
$consulta->bind_param("ss", $usuario, $contraseña);

// Ejecutar la consulta
if ($consulta->execute()) {
    echo "Usuario creado con éxito.";
    // Redirigir al usuario a menu.html
    header("Location: menu.html");
    exit; // Es importante llamar a exit() después de header() para asegurar que el script PHP se detenga
} else {
    echo "Error al crear el usuario: ". $consulta->error;
}

// Cerrar la consulta y la conexión
$consulta->close();
$conexion->close();
?>
