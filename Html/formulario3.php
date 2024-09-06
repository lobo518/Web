<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario 2</title>
</head>

<body>
  <form action="#" method="POST">
    <div>
      <p>Intereses</p>
      <input type="checkbox" name="intereses[]" value="futbol" />Futbol
      <input type="checkbox" name="intereses[]" value="voleybol" />Voleybol
      <input type="checkbox" name="intereses[]" value="basquetbol" />Basquetbol
    </div>

    <div>
      <p>Tipo de usuario:</p>
      <input type="radio" name="opcion" checked value="Alumno" />Alumno
      <input type="radio" name="opcion" value="Maestro" />Maestro
    </div>

    <div>
      <p>Selecciona una tecnología:</p>
      <select name="cursos" id="">
        <option value="JavaScript">JavaScript</option>
        <option value="HTML5">HTML5</option>
        <option value="CSS3">CSS3</option>
        <option value="Web Standards">Web Standards</option>
      </select>
    </div>

    <div>
      <p>Selecciona otra tecnología:</p>
      <input list="cursos" />
      <datalist id="cursos">
        <option value="JavaScript"></option>
        <option value="HTML5"></option>
        <option value="CSS3"></option>
        <option value="Web Standar"></option>
      </datalist>
    </div>

    <input type="submit" value="Enviar" />
  </form>
</body>

</html>