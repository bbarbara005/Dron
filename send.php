<?php
error_reporting(0);
$name = $_POST['nombre'];
$correo= $_POST['correo'];
$asunto = $_POST['asunto'];
$detalle=$_POST['mensaje'];  ------------

$detalle=wordwrap($$detalle,70);



$header = 'From: ' . $mail ."\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Detalle:" . $detalle . " \r\n";
$mensaje .= " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'barbara.perez.v@usach.cl';

// mail($para, $asunto, utf8_decode($mensaje), $header);  



mail($para,"My subject",$msg);

echo 'mensaje enviado correctamente';

?> 