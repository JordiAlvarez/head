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

if(isset($_POST['submit'])) { 

  $from = "profepielagos@gmail.com";
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];
  $mostrar_formulario=false;

 

   if(empty($asunto) && empty($mensaje)) {

   echo 'olvidó el asunto y el mensaje';

    $mostrar_formulario= true;
     
      }


   if(empty($asunto) && (!empty($mensaje))) {

    echo 'olvidó el asunto';

      $mostrar_formulario= true;
      }

    if(empty($mensaje) && (!empty($asunto))) {

    echo 'olvidó el mensaje';

      $mostrar_formulario= true;

      } }



if  ( (!empty($asunto)) && (!empty($mensaje))) {

$conexion = mysqli_connect('localhost', 'root', '', 'basedatos1') or die('Error conectando a MySQL server.');

  $consulta = "SELECT * FROM emails";

  $resultado = mysqli_query($conexion, $consulta)
    or die('Error conectando a base de datos.');



  while ($fila = mysqli_fetch_assoc($resultado)){


    $nombre = $fila['nombre'];
    $apellido = $fila['apellido'];
    $email = $fila['email'];


    $msg_correo = "Estimado $nombre $apellido,\n $mensaje";

    mail($email, $asunto, $msg_correo, 'De:' . $from);

    echo 'Enviado email a: ' . $email . '<br />';
  }

  mysqli_close($conexion);

}




if($mostrar_formulario)  {  


?>

<form method="post" action="sendemail2.php">
    <label for="subject">Asunto del email:</label><br />
    <input id="subject" name="asunto" type="text" size="30" /><br />
    <label for="elvismail">Mensaje del email:</label><br />
    <textarea id="elvismail" name="mensaje" rows="8" cols="40"></textarea><br />
    <input type="submit" name="submit" value="Enviar" />
  </form>

<?php 

 }

?>

</body>
</html>
