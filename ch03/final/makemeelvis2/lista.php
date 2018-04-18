<?php

// 1. Conexión a base de datos

$conexion=mysqli_connect('localhost', 'root', '', 'basedatos1');

//localhost = maquina a la que me conecto
// root= usuario de la base de datos
// ''= contraseña base datos
// basedatos1 = base de datos a la que me conecto

// 2. Crear consulta a la base de datos

$consulta="SELECT * FROM emails";

// 3. Ejecutar consulta

$resultado=mysqli_query($conexion, $consulta);


// 4. Imprimir en tabla todos los resultados

echo "<table>";

while ($fila = mysqli_fetch_assoc($resultado))  {

	echo "<tr><td>".$fila['nombre'].
	"</td><td>".$fila['apellido'].
	"</td><td>".$fila['email']."</td></tr>";

}

echo "</table>";

?>