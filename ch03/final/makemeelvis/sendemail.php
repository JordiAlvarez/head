<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Enviar Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<?php
  $from = "profepielagos@gmail.com";
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1')
    or die('Error conectando a MySQL server.');

  $query = "SELECT * FROM lista_emails";
  $result = mysqli_query($dbc, $query)
    or die('Error conectando a base de datos.');

  while ($fila = mysqli_fetch_array($result)){
    $to = $fila['email'];
    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];
    $msg = "Estimado $nombre $apellido,\n$mensaje";
    mail($to, $asunto, $msg, 'De:' . $from);
    echo 'Enviado email a: ' . $to . '<br />';
  }

  mysqli_close($dbc);
?>

</body>
</html>
