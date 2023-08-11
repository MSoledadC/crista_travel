<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    
    $
$mensaje = $_POST["mensaje"];

    $destinatario = "mariasoledadcabanillas@gmail.com";
    $asuntoEmail = "Nuevo mensaje de contacto desde el sitio web";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Apellido: $apellido\n";
    
    $
$contenido .= "Email: $email\n";
    $contenido .= "Asunto: $asunto\n";
    $contenido .= "Mensaje:\n$mensaje";

    $cabeceras = "From: $email";

    mail($destinatario, $asuntoEmail, $contenido, $cabeceras);

    echo "Mensaje enviado correctamente. Gracias por tu contacto.";
} else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
}
?>