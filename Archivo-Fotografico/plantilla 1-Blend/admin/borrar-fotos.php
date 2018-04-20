<?php

$borrar=$_GET['id'];

echo $borrar;

$conexion=mysqli_connect('localhost','root','','basedatos1');

$consulta="DELETE FROM fotos WHERE id=$borrar";

$resultado=mysqli_query($conexion, $consulta);

mysqli_close($conexion);

echo "Has borrado la foto con el id: ".$borrar;

header ('Location: lista-fotos.php');



?>