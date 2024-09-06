<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 1</title>
</head>

<body>

  <form action="RecibeFormulario1.php" method="GET">
    <label for="nombre">Nombre:</label>
    <input name="nombre" type="text" id="nombre">
    <br>
    <label for="email">Email</label>
    <input name="email" type="email" id="email">
    <br>
    <label for="mensaje">Mensaje</label>
    <textarea name="mensaje" id="mesaje" cols="30" rows="10"></textarea>
    <br>

    <input type="submit" value="Enviar">

  </form>

</body>

</html>