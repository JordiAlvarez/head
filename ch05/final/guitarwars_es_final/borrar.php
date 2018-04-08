<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - Borra un ranking</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Borrar ranking</h2>

<?php
  require_once('conexion.php');
  require_once('constantes.php');

  if (isset($_GET['id']) && isset($_GET['fecha']) && isset($_GET['nombre']) && isset($_GET['puntos']) && isset($_GET['imagen'])) {
    // Coge todos los valores que vienen por el GET
    $id = $_GET['id'];
    $fecha = $_GET['fecha'];
    $nombre = $_GET['nombre'];
    $puntos = $_GET['puntos'];
    $imagen = $_GET['imagen'];
  }
  else if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['puntos'])) {
    // Grab the puntos data from the POST
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $puntos = $_POST['puntos'];
  }
  else {
    echo '<p class="error">Disculpa, no se ha borrado nada.</p>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
      // Borrar la imagen
      @unlink(CARPETA . $imagen);

      // Connectar a la base de datos
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $id = $_POST['id'];
  $puntos = $_POST['puntos'];
  $nombre = $_POST['nombre'];
      // Borrar el ranking de la base de datos
      $consulta= "DELETE FROM guitarwars WHERE id = $id LIMIT 1";
      mysqli_query($dbc, $consulta);
      mysqli_close($dbc);

      // Confirmar que se ha borrado adecuadamente.
      echo '<p>La puntuación de ' . $puntos . ' de ' . $nombre . ' ha sido borrada.';
    }
    else {
      echo '<p class="error">No se han borrado los rankings.</p>';
    }
  }
  else if (isset($id) && isset($nombre) && isset($fecha) && isset($puntos)) {
    echo '<p>Estás seguro de que quieres borrar estos rankings?</p>';
    echo '<p><strong>Nombre: </strong>' . $nombre . '<br /><strong>fecha: </strong>' . $fecha .
      '<br /><strong>puntos: </strong>' . $puntos . '</p>';
    echo '<form method="post" action="borrar.php">';
    echo '<input type="radio" name="confirm" value="Yes" /> Si ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Borrar" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="nombre" value="' . $nombre . '" />';
    echo '<input type="hidden" name="puntos" value="' . $puntos . '" />';
    echo '</form>';
  }

  echo '<p><a href="admin.php">&lt;&lt; Volver a la página de administración</a></p>';
?>

</body>
</html>
