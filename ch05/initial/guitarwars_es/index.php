<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Puntuaciones</h2>
  <p>Conviertete en un Guitarrista Profesional y compite con otros colegas, <a href="addscore.php">añade tu puntuación</a>.</p>
  <hr />

<?php
    // Conectando a la base de datos (Data Base Conection, dbc)
  $dbc = mysqli_connect('localhost', 'root', '', 'basedatos1');

  // Sacando la información de la basedatos1
  $consulta = "SELECT * FROM guitarwars";
  $resultado = mysqli_query($dbc, $consulta);

  // Bucle para imprimir cada fila de la tabla de la base de datos en una tabla HTML
  echo '<table>';
  while ($fila = mysqli_fetch_array($resultado)) {
    // Mostrando los datos de la tabla guitarwars
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $fila['puntos'] . '</span><br />';
    echo '<strong>Nombre:</strong> ' . $fila['nombre'] . '<br />';
    echo '<strong>Fecha:</strong> ' . $fila['fecha'] . '</td></tr>';
  }
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>
