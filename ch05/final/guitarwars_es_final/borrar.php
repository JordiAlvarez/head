<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - Borra un ranking</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Remove a High puntos</h2>

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
    echo '<p class="error">Sorry, no high puntos was specified for removal.</p>';
  }

  if (isset($_POST['submit'])) {
    if ($_POST['confirm'] == 'Yes') {
      // Delete the screen shot image file from the server
      @unlink(CARPETA . $imagen);

      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  $id = $_POST['id'];
  $puntos = $_POST['puntos'];
  $nombre = $_POST['nombre'];
      // Delete the puntos data from the database
      $consulta= "DELETE FROM guitarwars WHERE id = $id LIMIT 1";
      mysqli_query($dbc, $consulta);
      mysqli_close($dbc);

      // Confirm success with the user
      echo '<p>The high puntos of ' . $puntos . ' for ' . $nombre . ' was successfully removed.';
    }
    else {
      echo '<p class="error">The high puntos was not removed.</p>';
    }
  }
  else if (isset($id) && isset($nombre) && isset($fecha) && isset($puntos)) {
    echo '<p>Are you sure you want to delete the following high puntos?</p>';
    echo '<p><strong>Name: </strong>' . $nombre . '<br /><strong>fecha: </strong>' . $fecha .
      '<br /><strong>puntos: </strong>' . $puntos . '</p>';
    echo '<form method="post" action="borrar.php">';
    echo '<input type="radio" name="confirm" value="Yes" /> Si ';
    echo '<input type="radio" name="confirm" value="No" checked="checked" /> No <br />';
    echo '<input type="submit" value="Submit" name="submit" />';
    echo '<input type="hidden" name="id" value="' . $id . '" />';
    echo '<input type="hidden" name="nombre" value="' . $nombre . '" />';
    echo '<input type="hidden" name="puntos" value="' . $puntos . '" />';
    echo '</form>';
  }

  echo '<p><a href="admin.php">&lt;&lt; Back to admin page</a></p>';
?>

</body>
</html>
