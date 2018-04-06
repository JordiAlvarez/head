<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Enviar Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
  <p><strong>Private:</strong> Solo para uso del administrador<br />
Escribe y envía un correo a los miembros de la lista.</p>

<?php
  if (isset($_POST['submit'])) {
    $from = 'profepielagos@gmail.com';
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $output_form = false;

    if (empty($asunto) && empty($mensaje)) {
      // Sabemos que el asunto y el mensaje están en blanco
      echo 'Olvidó el asunto y el mensaje.<br />';
      $output_form = true;
    }

    if (empty($asunto) && (!empty($mensaje))) {
      echo 'Olvidó el asunto .<br />';
      $output_form = true;
    }

    if ((!empty($asunto)) && empty($mensaje)) {
      echo 'Olvidó el mensaje.<br />';
      $output_form = true;
    }
  }
  else {
    $output_form = true;
  }

  if ((!empty($asunto)) && (!empty($mensaje))) {
    $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1')
    or die('Error connecting to MySQL server.');

    $query = "SELECT * FROM lista_emails";
    $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

      while ($fila = mysqli_fetch_array($result)){
        $to = $fila['email'];
        $nombre = $fila['nombre'];
        $apellido = $fila['apellido'];
        $msg = "Estimado $nombre $apellido,\n$mensaje";
        mail($to, $asunto, $msg, 'De:' . $from);
        echo 'Enviado email a: ' . $to . '<br />';
      }

    mysqli_close($dbc);
  }

  if ($output_form) {

    // Añadimos validaciones isset para colocar los campos que ya han sido rellenados

?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="subject">Asunto:</label><br />
    <input id="subject" name="asunto" type="text" value="<?php if(isset ($_POST['asunto'])) {echo $asunto;}?>" size="30" /><br />
    <label for="elvismail">Mensaje:</label><br />
    <textarea id="elvismail" name="mensaje" rows="8" cols="40" ><?php if(isset ($_POST['mensaje'])) {echo $mensaje;}?></textarea><br />
    <input type="submit" name="submit" value="Submit" />
  </form>

<?php
  }
?>

</body>
</html>
