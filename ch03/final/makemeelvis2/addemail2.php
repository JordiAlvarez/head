<?php 


// 1. Recogiendo en variables los valores introducidos en formulario

$nombre=$_POST['nombre']; // lo que hay entre comillas coincide con el name del campo del formulario que queremos recoger
$apellido=$_POST['apellido'];
$email=$_POST['email'];

// 2. Conexión a base de datos

$conexion=mysqli_connect('localhost', 'root', '', 'basedatos1');

//localhost = maquina a la que me conecto
// root= usuario de la base de datos
// ''= contraseña base datos
// basedatos1 = base de datos a la que me conecto

// 3. Crear consulta a la base de datos

$consulta="
INSERT INTO 
emails 
(nombre, apellido, email) 
VALUES 
('$nombre', '$apellido', '$email')";

// 4. Ejecutar conexion y consulta

$resultado=mysqli_query($conexion, $consulta);

echo "Fila añadida a tabla emails";

// 5. Cerrar conexión

mysqli_close($conexion);

// 6. Ver resultados en lista.php

header("Location: lista.php");
?>