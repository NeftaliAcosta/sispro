<?php
//Variables del formulario de contacto

@$nombre = addslashes($_POST['name']);
@$email = addslashes($_POST['email']);
@$mensaje = addslashes($_POST['message']);
@$telefono = addslashes($_POST['phone']);
@$reply = 'contacto@sispro.com.mx';

//Mensaje de contacto
$cabeceras = 'From:'.$email . "\r\n" .
    'Reply-To: '.$reply. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$asunto = "Contacto Sispro";
$email_to = "contacto@sispro.com.mx";
$contenido = "$nombre ha enviado un mensaje desde la web sispro.com.mx"
. "\n"
. "Nombre: $nombre\n"
. "Telefono: $telefono\n"
. "Email: $email\n"
. "mensaje: $mensaje\n"
;






//Enviamos y resultados del mensaje
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Confirmación mensaje Ok
die("Mensaje enviado correctamente...");
}else{
//Error en el envió
die("Error: Su mensaje no pudo ser enviado, intente nuevamente");
}
?>
