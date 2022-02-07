<?php

//Importamos las variables del formulario
foreach($_POST as $k => $v) {
	if(isset(${$k})) unset(${$k});
	if(in_array($k, array('name','email','subject','message')))
	${$k} = @get_magic_quotes_gpc() ? $v : @addslashes($v);
}
//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "$subject"; //El asunto
//$email_to = "contacto@catepay.com"; //cambiar por tu email
$email_to = "raul.webnet@hotmail.com"; //cambiar por tu email  "jcatorceno@catepay.com"
//$email_to = "contacto@catepay.com"; //cambiar por tu email
$contenido = "$name le ha enviado el siguiente mensaje:\n"
. "\n"
. "$message\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if(@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
//Si el mensaje se envia muestra una confirmacion
die("Muchas gracias, su mensaje fue enviado correctamente");

}else{
//Si el mensaje no se envia muestra el mensaje de error
die("Error: Su mensaje no pudo ser enviado, intente mas tarde");
}

?>
 


