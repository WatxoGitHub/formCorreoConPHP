<?php  
echo "mensaje";
// Llamando a los campos
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

// Datos para el correo
$destinatario = "dekontruccion@gmail.com";
$asunto = "Contacto desde nuestra web";
echo "<script> alert ('mesaje dos') </script>";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Status: 302 Moved Permanently");
header("Location:mensaje-de-envio.html");

?>


<!-- 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "prueba@solucionex.com";
    $to = "javiernuber@gmail.com";
    $subject = "Prueba de envio de email con PHP";
    $message = "Esto es un email de prueba enviado con PHP";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "Email enviado!!";
?> -->