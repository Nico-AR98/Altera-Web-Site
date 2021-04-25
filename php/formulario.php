<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];
$to = 'alfredongallg@gmail.com';
$email_subject = "Consulta Web Site Altera";
$email_body = "Haz recibido un nuevo mensaje. \n <strong>Nombre:</strong> $nombre \n Correo: $email
\n  Mensaje o consulta: \n $mensaje \n";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo "Gracias por tu mensaje! Pronto nos comunicaremos contigo.";
echo "<script> window.location='contacto.html';</script>";
?>