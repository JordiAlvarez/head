<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores Administration</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Administración del ranking</h2>
  <p>Abajo tienes la administración de los rankings, borra el que consideres.</p>
  <hr />

<?php
require_once('constantes.php');
require_once('conexion.php');

  // Conectar a la base de datos
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // Recoger datos de la tabla guitarwars a través de SQL
  $consulta = "SELECT * FROM guitarwars ORDER BY puntos DESC, fecha ASC";
  $resultado = mysqli_query($dbc, $consulta);

  // Colocando en una tabla el resultado de la consulta SQL
  echo '<table>';
  while ($fila= mysqli_fetch_array($resultado)) {
    // Mostrando fila tras fila
    echo '<tr class="scorerow"><td><strong>' . $fila['nombre'] . '</strong></td>';
    echo '<td>' . $fila['fecha'] . '</td>';
    echo '<td>' . $fila['puntos'] . '</td>';
    echo '<td><a href="borrar.php?id=' . $fila['id'] . '&amp;fecha=' . $fila['fecha'] .
      '&amp;nombre=' . $fila['nombre'] . '&amp;puntos=' . $fila['puntos'] .
      '&amp;imagen=' . $fila['imagen'] . '">Borrar</a></td></tr>';
  }
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>
