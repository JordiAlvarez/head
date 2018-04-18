<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Add Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
  <p>Introduce tu nombre, apellido y email y súmate a la lista de subscriptores.</p>

<?php
  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mostrar_formulario = 'no';

    if (empty($nombre) || empty($apellido) || empty($email)) {
      // We know at least one of the input fields is blank
      echo 'Por favor rellena todos los campos del formulario.<br />';
      $mostrar_formulario = 'yes';
    }
  }
  else {
    $mostrar_formulario = 'yes';
  }

  if (!empty($nombre) && !empty($apellido) && !empty($email)) {
    $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1')
    or die('Error connecting to MySQL server.');

    $query = "INSERT INTO lista_emails (nombre, apellido, email)  VALUES ('$nombre', '$apellido', '$email')";
    mysqli_query($dbc, $query)
      or die ('Datos no insertados.');

    echo 'Cliente añadido.';

    mysqli_close($dbc);
  }

  if ($mostrar_formulario) {
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="firstname">Nombre:</label>
    <input type="text" id="firstname" name="nombre" /><br />
    <label for="lastname">Apellido:</label>
    <input type="text" id="lastname" name="apellido" /><br />
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" /><br />
    <input type="submit" name="submit" value="Enviar" />
  </form>

<?php
  }
?>

</body>
</html>
