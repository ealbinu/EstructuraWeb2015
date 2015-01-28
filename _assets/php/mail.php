<?php

extract($_GET);



$to         = 'ealbinu+test@gmail.com';
$subject    = 'Mensaje de papeldigital';
$message    = '<h1>Mensaje generado desde el formulario de contacto en papeldigital</h1>'."<br>";
$message.= '<strong>De:</strong> '.$fnombre."<br>";
$message.= '<strong>Correo electrónico:</strong> '.$fcorreo."<br>";
$message.= '<strong>Mensaje:</strong> '.$fmensaje."<br>";

$subject = utf8_decode($subject);
$message = utf8_decode($message);

$headers= "From: " . strip_tags($fcorreo) . "\r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if ( mail ( $to, $subject, $message, $headers ) ) {
   echo 1;
} 
else {
  echo 0;
}

?>