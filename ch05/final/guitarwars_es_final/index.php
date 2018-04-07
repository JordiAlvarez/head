<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Ranking</h2>
  <p>Bienvenido Guitarrista, tienes lo que hay que tener para ganar?, si es así  <a href="puntuacion.php">añade tu puntuación</a>.</p>
  <hr />

<?php
  require_once('constantes.php');
  require_once('connectvars.php');

  // Conectar a la base de datos
  $dbc = mysqli_connect('localhost', 'root','', 'basedatos1');

  // Hacer la consulta
  $consulta = "SELECT * FROM guitarwars ORDER BY puntos DESC, fecha ASC";
  $resultado = mysqli_query($dbc, $consulta);

  // Sacar por un bucle los resultados d ela consulta en una tabla
  echo '<table>';
  $i = 0;
  while ($fila = mysqli_fetch_array($resultado)) {
    // Muestra la puntuación más alta
    if ($i == 0) {
      echo '<tr><td colspan="2" class="topscoreheader">Puntuación más alta: ' . $fila['puntos'] . '</td></tr>';
    }
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $fila['puntos'] . '</span><br />';
    echo '<strong>Nombre:</strong> ' . $fila['nombre'] . '<br />';
    echo '<strong>Fecha:</strong> ' . $fila['fecha'] . '</td>';
    if (is_file(GW_UPLOADPATH . $fila['imagen']) && filesize(GW_UPLOADPATH . $fila['imagen']) > 0) {
      echo '<td><img src="' . GW_UPLOADPATH . $fila['imagen'] . '" alt="Score image" /></td></tr>';
    }
    else {
      echo '<td><img src="' . GW_UPLOADPATH . 'unverified.gif' . '" alt="Unverified score" /></td></tr>';
    }
    $i++;
  }
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>
