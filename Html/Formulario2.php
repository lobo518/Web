<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario 2</title>
</head>

<body>

  <form action="RecibeFormulario2.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre">
    <br>
    <label for="email">Email</label>
    <input name="email" type="email" id="email">
    <br>
    <label for="mensaje">Mensaje</label>
    <textarea name="mensaje" id="mesaje" cols="30" rows="10"></textarea>
    <br>

    <label for="hora">
      <span>Hora:</span>
      <input type="time" id="hora" name="hora">
    </label>

    <label for="dia">
      <span>Día:</span>
      <input type="date" id="dia" name="dia">
    </label>

    <label for="semana">
      <span>Semana:</span>
      <input type="week" id="semana" name="semana">
    </label>

    <label for="mes">
      <span>Mes:</span>
      <input type="month" id="mes" name="mes">
    </label>

    <label for="calendario">
      <span>Calendario:</span>
      <input type="datetime-local" id="calendario" name="calendario">
    </label>


    <label for="Intereses">
      <span>Intereses</span>
      <input type="checkbox" name="intereses[]" value="futbol">Futbol<br>
      <input type="checkbox" name="intereses[]" value="voleybol">Voleybol<br>
      <input type="checkbox" name="intereses[]" value="basquetbol">Basquetbol<br>
    </label>


    <br>
    <p>Tipo de usuario:</p>
    <input type="radio" name="opcion" checked value="Alumno">Alumno<br>
    <input type="radio" name="opcion" value="Maestro">Maestro<br>

    <br>


    <select name="cursos" id="">
      <option value="JavaScript">JavaScript</option>
      <option value="HTML5">HTML5</option>
      <option value="CSS3">CSS3</option>
      <option value="Web Standards">Web Standards</option>
    </select>


    <br>

    <input list="cursos">
    <datalist id="cursos">
      <option value="JavaScript"></option>
      <option value="HTML5"></option>
      <option value="CSS3"></option>
      <option value="Web Standar"></option>
    </datalist>


    <br>
    <br>
    <input type=" submit" value="Enviar">

  </form>

</body>

</html>