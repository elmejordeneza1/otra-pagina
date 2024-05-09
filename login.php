
<?php
// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar usuario y contraseña
    $usuario_valido = "pepo";
    $contraseña_valida = "54419051";

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    if ($usuario === $usuario_valido && $contraseña === $contraseña_valida) {
        // Iniciar sesión exitosa, redireccionar a la página de menú
        header("Location: menu.html");
        exit();
    } else {
        // Usuario o contraseña incorrectos, mostrar mensaje de error
        $mensaje_error = "Usuario o contraseña incorrectos.";
    }
}
?>
