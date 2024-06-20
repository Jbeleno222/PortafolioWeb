<?php

$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject'];
$mensaje = $_POST['text'];

$header .= "Content-Type: tect/plain";

$contenido = "Este mensaje fue enviado por $name \r\n";
$contenido .= "su e-mail es: $mail \r\n";
$contenido .= "el asunto es: $subject \r\n";
$contenido .= "mensaje: $text \r\n";


$destinatario = 'jjbelenoc@ufpso.edu.co';
$asunto = 'Este mail fue enviado desde: Portafolio Web';

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:../html/exito.html');

?>