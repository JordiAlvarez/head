<!DOCTYPE html>
<html>
<head>
	<title></title>

<meta charset="utf-8">
	<style type="text/css">

		
@import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";
.rwd-table {
  margin: 1em 0;
  min-width: 300px;
}
.rwd-table tr {
  border-top: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
}
.rwd-table th {
  display: none;
}
.rwd-table td {
  display: block;
}
.rwd-table td:first-child {
  padding-top: .5em;
}
.rwd-table td:last-child {
  padding-bottom: .5em;
}
.rwd-table td:before {
  content: attr(data-th) ": ";
  font-weight: bold;
  width: 6.5em;
  display: inline-block;
}
@media (min-width: 480px) {
  .rwd-table td:before {
    display: none;
  }
}
.rwd-table th, .rwd-table td {
  text-align: left;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    display: table-cell;
    padding: .25em .5em;
  }
  .rwd-table th:first-child, .rwd-table td:first-child {
    padding-left: 0;
  }
  .rwd-table th:last-child, .rwd-table td:last-child {
    padding-right: 0;
  }
}

body {
  padding: 0 2em;
  font-family: Montserrat, sans-serif;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
  color: #444;
  background: #eee;
}

h1 {
  font-weight: normal;
  letter-spacing: -1px;
  color: #34495E;
}

.rwd-table {
  background: #34495E;
  color: #fff;
  border-radius: .4em;
  overflow: hidden;
}
.rwd-table tr {
  border-color: #46637f;
}
.rwd-table th, .rwd-table td {
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .rwd-table th, .rwd-table td {
    padding: 1em !important;
  }
}
.rwd-table th, .rwd-table td:before {
  color: #dd5;
}
 img { width: 75px; }

	</style>
</head>
<body>

<h1>Lista Información Fotográfica</h1>

<?php

$conexion=mysqli_connect('localhost','root','','basedatos1');

$consulta="SELECT * FROM fotos";

$resultado=mysqli_query($conexion, $consulta);

echo "<table class='rwd-table'>";

echo "<tr><th>id</th><th>Título</th><th>Descripción</th><th>Autor</th><th>Localización</th><th>Categoría</th><th>Fecha Publicación</th><th>Fecha Original</th></tr>";

while($fila = mysqli_fetch_assoc($resultado)){

echo "<tr><td>".$fila['id']."</td>";
echo "<td>".$fila['titulo']."</td>";
echo "<td>".$fila['descripcion']."</td>";
echo "<td>".$fila['autor']."</td>";
echo "<td>".$fila['localizacion']."</td>";
echo "<td>".$fila['categoria']."</td>";
echo "<td>".$fila['fecha_publicacion']."</td>";
echo "<td>".$fila['fecha']."</td>";

echo "<td><img src='http://localhost/head/Archivo-Fotografico/plantilla1/imagenes/".$fila['url']."'></td>";

echo "<td><a href='borrar-fotos.php?id=".$fila['id']."'>Borrar</a></td></tr>";

}

echo "</table>";

mysqli_close($conexion);


?>


</body>
</html>
























