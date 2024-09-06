<?php
echo "Datos:";
echo "<br>";

$nombre = $_GET['nombre'];
$email = $_GET['email'];
$mensaje = $_GET['mensaje'];


echo 'Hola ' . $nombre . ' tu correo es ' . $email . 'el mensaje recibido es: ' . $mensaje;

echo "<br>";

echo "Hola $nombre tu correo es $email el mensaje recibido es: $mensaje";
