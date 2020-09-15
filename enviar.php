<?php  

// Llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
echo ("mesaje 1");
// Datos para el correo
$destinatario = "dekontruccion@gmail.com";
$asunto = "Contacto desde nuestra web";
echo ("mesaje 2");
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";
echo ("mesaje 3");
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location:mensaje-de-envio.html");

?>