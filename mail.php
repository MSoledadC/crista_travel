<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "mariasoledadcabanillas@gmail.com";
    $asuntoEmail = "Nuevo mensaje desde el formulario de contacto";

    $contenido = "Nombre: $nombre $apellido\n";
    $contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje: $mensaje\n";

    $cabeceras = "From: $email";

    mail($destinatario, $asunto, $email, $contenido, $cabeceras);

    echo "Mensaje enviado correctamente. Gracias por tu contacto.";
} else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
}
?>
