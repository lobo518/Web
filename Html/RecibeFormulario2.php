<?php
echo "Datos:";
echo "<br>";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$tipoUsuario = $_POST['opcion'];

echo 'Hola ' . $nombre . ' tu correo es ' . $email . 'el mensaje recibido es: ' . $mensaje;

echo "<br>";

echo "Hola $nombre tu correo es $email el mensaje recibido es: $mensaje";

echo "<br>";


if (isset($_POST['intereses'])) {
  $intereses = $_POST['intereses'];
  echo "Opciones seleccionadas:<br>";
  foreach ($intereses as $interes) {
    echo "- " . $interes . "<br>";
  }
} else {
  echo "Ninguna opción fue seleccionada.";
}



echo "El tipo de usuario es $tipoUsuario";
