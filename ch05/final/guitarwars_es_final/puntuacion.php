<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars -Añade tu puntuación</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars -Añade tu puntuación</h2>

<?php
  require_once('constantes.php');
  require_once('conexion.php');

  if (isset($_POST['submit'])) {
    // Grab the score data from the POST
    $nombre = $_POST['nombre'];
    $puntos = $_POST['puntos'];
    $imagen = $_FILES['imagen']['name'];
    $imagen_type = $_FILES['imagen']['type'];
    $imagen_size = $_FILES['imagen']['size'];

    if (!empty($nombre) && !empty($puntos) && !empty($imagen)) {
      if ((($imagen_type == 'image/gif') || ($imagen_type == 'image/jpeg') || ($imagen_type == 'image/jpg') || ($imagen_type == 'image/png'))        && ($imagen_size > 0) && ($imagen_size <= GW_MAXFILESIZE)) {
        if ($_FILES['imagen']['error'] == 0) {          // No hay errores entonces mueve la imagen a la carpeta
          $target = GW_UPLOADPATH . $imagen;
          if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target)) {
            // Conexión base de datos
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Introduce datos en la base de datos
            $consulta = "INSERT INTO guitarwars VALUES (0, NOW(), '$nombre', '$puntos', '$imagen')";
            mysqli_query($dbc, $consulta);

            // Confirm success with the user
            echo '<p>Thanks for adding your new high score! It will be reviewed and added to the high score list as soon as possible.</p>';
            echo '<p><strong>Nombre:</strong> ' . $nombre . '<br />';
            echo '<strong> Puntos:</strong> ' . $puntos . '<br />';
            echo '<img src="' . GW_UPLOADPATH . $imagen . '" alt="Score image" /></p>';
            echo '<p><a href="index.php">&lt;&lt; Back to high scores</a></p>';

            // Limpia los datos almacenados para limpiar el formulario
            $name = "";
            $score = "";
            $screenshot = "";

            mysqli_close($dbc);
          }
          else {
            echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
          }
        }
      }      else {        echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (GW_MAXFILESIZE / 1024) . ' KB in size.</p>';      }

      // Try to delete the temporary screen shot image file
      @unlink($_FILES['screenshot']['tmp_name']);
    }
    else {
      echo '<p class="error">Please enter all of the information to add your high score.</p>';
    }
  }
?>

  <hr />
  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo GW_MAXFILESIZE; ?>" />
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="nombre" value="<?php if (!empty($nombre)) echo $nombre; ?>" /><br />
    <label for="score">Score:</label>
    <input type="text" id="score" name="puntos" value="<?php if (!empty($puntos)) echo $puntos; ?>" /><br />
    <label for="screenshot">Imagen:</label>
    <input type="file" id="screenshot" name="imagen" />
    <hr />
    <input type="submit" value="Enviar" name="submit" />
  </form>
</body>
</html>
