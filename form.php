<?php
$nombre=$_POST['NombreYapellido'];

$mail=$_POST['email'];
$celu=$_POST['Telefono'];
$Text=$_POST['TextArea'];

//Como me va a llegar a mi:
$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "El email de la persona es: " . $mail . " \r\n";
$mensaje .= "El telefono de la persona es: " . $celu . " \r\n";
$mensaje .= "El comentario de la persona es: " . $celu . " \r\n";
$mensaje .= "Enviado el " . date('d/m/y', time());

$para = 'alejandroernst2@gmail.com';
$asunto = 'Mail proveniente de Landing Saquitos de Mechi';


//header es la redireccion del formulario, una vez que lo enviamos
header('Location:exito.html');

//funcion Mail
mail($mail, $asunto, utf8_decode($mensaje), $header);