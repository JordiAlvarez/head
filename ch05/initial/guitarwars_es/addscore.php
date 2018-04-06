<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - Add Your High Score</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars -Añade tu puntuación</h2>

<?php
// Usamos el name submit del formulario para saber si se ha enviado el formulario
  if (isset($_POST['submit'])) {
    // Coge las puntuaciones de los campos del formulario
    $nombre= $_POST['nombre'];
    $puntos = $_POST['puntos'];

    if (!empty($nombre) && !empty($puntos)) {
      // Conectando a la base de datos (Data Base Conection, dbc)
      $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1');

      // Creando la consulta para insertar nuevos registros en la base de datos
      $consulta = "INSERT INTO guitarwars VALUES (0, NOW(), '$nombre', '$puntos')";
      mysqli_query($dbc, $consulta);

      // Confirmación de que has añadido una nueva puntuación
      echo '<p>Gracias por añadir una nueva puntuación!</p>';
      echo '<p><strong>Nombre:</strong> ' . $nombre . '<br />';
      echo '<strong>Puntos:</strong> ' . $puntos . '</p>';
      echo '<p><a href="index.php">&lt;&lt; Vuelve al ranking de guitarristas</a></p>';

      // Limpiar las variables para limpiar las puntuaciones
      $nombre = "";
      $puntos = "";

      mysqli_close($dbc);
    }
    else {
      echo '<p class="error">Por favor introduce toda la información para añadir tu puntuación.</p>';
    }
  }
?>

  <hr />
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="nombre" value="<?php if (!empty($nombre)) echo $nombre; ?>" /><br />
    <label for="score">Puntuación:</label>
    <input type="text" id="score" name="puntos" value="<?php if (!empty($puntuacion)) echo $puntuacion; ?>" />
    <hr />
    <input type="submit" value="Enviar" name="submit" />
  </form>
</body>
</html>
