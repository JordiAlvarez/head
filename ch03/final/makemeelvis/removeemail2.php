<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make Me Elvis - Remove Email</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
 <img src="blankface.jpg" width="161" height="350" alt="" style="float:right" />
  <img name="elvislogo" src="elvislogo.gif" width="229" height="32" border="0" alt="Make Me Elvis" />
<p>Selecciona el correo a borrar y clicka borrar.</p>

<form method="POST" action="removeemail2.php">

<?php

if(isset($_POST['submit'])) {
  
  $id=$_POST['id'];

  $conexion=mysqli_connect('localhost', 'root', '', 'basedatos1');

  $consulta2="DELETE FROM emails WHERE id='$id'";

  $resultado2=mysqli_query($conexion, $consulta2);

}


$conexion=mysqli_connect('localhost', 'root', '', 'basedatos1');

$consulta="SELECT * FROM emails";

$resultado=mysqli_query($conexion, $consulta);

while($fila=mysqli_fetch_assoc($resultado)){

  echo "<input type='checkbox' value=".$fila['id']." name='id' >";  

  echo $fila['nombre'];
  echo " ";
  echo $fila ['apellido'];
  echo " ";
  echo $fila['email'];
echo "<br>";


}


?>
<input type="submit"  name="submit" value="Borrar">
</form>

</body>
</html>
