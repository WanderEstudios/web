<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $asunto = htmlspecialchars($_POST['asunto']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

   
    $destinatario = "carlosmorelo@gmail.com";

   
    $asuntoCorreo = "Formulario de Contacto: $asunto";

   
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $email\n";
    $cuerpo .= "Asunto: $asunto\n";
    $cuerpo .= "Mensaje:\n$mensaje";

   
    $encabezados = "From: $email\r\n";
    $encabezados .= "Reply-To: $email\r\n";
    $encabezados .= "X-Mailer: PHP/" . phpversion();

   
    if (mail($destinatario, $asuntoCorreo, $cuerpo, $encabezados)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Error al enviar el mensaje.";
    }
} else {
    echo "Método de envío no válido.";
}
?>
