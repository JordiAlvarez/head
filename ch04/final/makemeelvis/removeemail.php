<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Borrar emails</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
  <p>Selecciona el correo a borrar y clicka borrar.</p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<?php
  $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1')
    or die('Error conectando a MySQL server.');

  // Borra un cliente de la base de datos solo si ha sido enviado el formulario
  if (isset($_POST['submit'])) {
    foreach ($_POST['todelete'] as $borrar_id) {
      $consulta = "DELETE FROM lista_emails WHERE id = $borrar_id";
      mysqli_query($dbc, $consulta)
        or die('Error querying database.');
    }

    echo 'Cliente(s) borrados.<br />';
  }

  // Muestra checkboxes que elegir para borrar usuarios
  $consulta = "SELECT * FROM lista_emails";
  $resultado = mysqli_query($dbc, $consulta);
  while ($fila = mysqli_fetch_array($resultado)) {
    echo '<input type="checkbox" value="' . $fila['id'] . '" name="todelete[]" />';
    echo $fila['nombre'];
    echo ' ' . $fila['apellido'];
    echo ' ' . $fila['email'];
    echo '<br />';
  }

  mysqli_close($dbc);
?>

    <input type="submit" name="submit" value="Borrar" />
  </form>
</body>
</html>
