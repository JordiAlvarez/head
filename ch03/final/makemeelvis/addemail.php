<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Add Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
<<<<<<< HEAD
  $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1')
=======
  $conexion = mysqli_connect('localhost', 'root', '', 'basedatos1')
>>>>>>> 7c54a0e2644dfe0c939adc4270caacf91f809189
    or die('Error connecting to MySQL server.');

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];

<<<<<<< HEAD
  $query = "INSERT INTO lista_emails (nombre, apellido, email)  VALUES ('$nombre', '$apellido', '$email')";
  mysqli_query($dbc, $query)
=======
  $consulta = "INSERT INTO emails (nombre, apellido, email)  VALUES ('$nombre', '$apellido', '$email')";
  mysqli_query($dbc, $consulta)
>>>>>>> 7c54a0e2644dfe0c939adc4270caacf91f809189
    or die('Error querying database.');

  echo 'Cliente Añadido.';

  mysqli_close($dbc);
?>

</body>
</html>
