<?php  

// Llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];
echo "<script> alert ('mesaje 1') </script>";
// Datos para el correo
$destinatario = "dekontruccion@gmail.com";
$asunto = "Contacto desde nuestra web";
echo "<script> alert ('mesaje dos') </script>";
$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";
echo "<script> alert ('mesaje tres') </script>";
// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location:mensaje-de-envio.html");

?>