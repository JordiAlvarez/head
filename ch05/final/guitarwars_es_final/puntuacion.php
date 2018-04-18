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
    // Si se envia el formulario coge todos los valores
    $nombre = $_POST['nombre'];
    $puntos = $_POST['puntos'];
    $imagen = $_FILES['imagen']['name'];
    $imagen_type = $_FILES['imagen']['type'];
    $imagen_size = $_FILES['imagen']['size'];

    if (!empty($nombre) && !empty($puntos) && !empty($imagen)) {
      if ((($imagen_type == 'image/gif') || ($imagen_type == 'image/jpeg') || ($imagen_type == 'image/jpg') || ($imagen_type == 'image/png'))
        && ($imagen_size > 0) && ($imagen_size <= SIZE)) {
        if ($_FILES['imagen']['error'] == 0) {
          // No hay errores entonces mueve la imagen a la carpeta
          $target = CARPETA . $imagen;
          if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target)) {
            // Conexión base de datos
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            // Introduce datos en la base de datos
            $consulta = "INSERT INTO guitarwars VALUES (0, NOW(), '$nombre', '$puntos', '$imagen')";
            mysqli_query($dbc, $consulta);

            // Confirmas que se ha añadido al guitarrista
            echo '<p>Gracias por añadir tu puntuación en breve te añadiremos al ranking.</p>';
            echo '<p><strong>Nombre:</strong> ' . $nombre . '<br />';
            echo '<strong> Puntos:</strong> ' . $puntos . '<br />';
            echo '<img src="' . CARPETA . $imagen . '" alt="Score image" /></p>';
            echo '<p><a href="index.php">&lt;&lt; Volver al Ranking</a></p>';

            // Limpia los datos almacenados para limpiar el formulario
            $nombre = "";
            $puntos = "";
            $imagen = "";

            mysqli_close($dbc);
          }
          else {
            echo '<p class="error">Sorry, there was a problem uploading your screen shot image.</p>';
          }
        }
      }
      else {
        echo '<p class="error">The screen shot must be a GIF, JPEG, or PNG image file no greater than ' . (SIZE / 1024) . ' KB in size.</p>';
      }

      // Intenta borrar el archivo temporal de la imagen
      @unlink($_FILES['imagen']['tmp_name']);
    }
    else {
      echo '<p class="error">Por favor introduce todos los datos para añadirte al ranking</p>';
    }
  }
?>

  <hr />
  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo SIZE; ?>" />
    <label for="name">Nombre:</label>
    <input type="text" id="name" name="nombre" value="<?php if (!empty($nombre)) echo $nombre; ?>" /><br />
    <label for="score">Puntos:</label>
    <input type="text" id="score" name="puntos" value="<?php if (!empty($puntos)) echo $puntos; ?>" /><br />
    <label for="screenshot">Imagen:</label>
    <input type="file" id="screenshot" name="imagen" />
    <br />
    <input type="submit" value="Enviar" name="submit" />
  </form>
</body>
</html>
