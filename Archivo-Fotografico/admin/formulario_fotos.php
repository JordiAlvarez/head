
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<style type="text/css">
		
body {background: #c1bdba;font-family: 'Patrick Hand', cursive;}

		form {    background: rgba(19, 35, 47, 0.9);
				  padding: 40px;
				  max-width: 600px;
				  margin: 40px auto;
				  border-radius: 4px;
				  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3)
				}

		label {position: absolute;
			  -webkit-transform: translateY(6px);
			  transform: translateY(6px);
			  margin-top:-15px;
			  color: rgba(255, 255, 255, 0.5);
			  transition: all 0.25s ease;
			  -webkit-backface-visibility: hidden;
			  pointer-events: none;
			  font-size: 22px;
			  }

	    input {
				  font-size: 22px;
				  display: block;
				  width: 100%;
				  height: 100%;
				  padding: 5px 10px;
				  background: none;
				  background-image: none;
				  border: 1px solid #a0b3b0;
				  color: #ffffff;
				  border-radius: 0;
				  transition: border-color .25s ease, box-shadow .25s ease;
					}

		input:focus{
  					outline: 0;
  					border-color: #1ab188;
					}

		#boton {
			  border: 0;
			  outline: none;
			  border-radius: 0;
			  padding: 15px 0;
			  font-size: 2rem;
			  font-weight: 600;
			  text-transform: uppercase;
			  letter-spacing: .1em;
			  background: #1ab188;
			  color: #ffffff;
			  transition: all 0.5s ease;
			  -webkit-appearance: none;
			}

		.boton-block {
					  display: block;
					  width: 103%;
						}

		#boton:hover, #boton:focus {
  									background: #179b77;
									}	

		.field-wrap {
					  position: relative;
					  margin-bottom: 40px;
					}

		.top-row:after {
						  content: "";
						  display: table;
						  clear: both;
						}

		.top-row > div {
						  float: left;
						  width: 45%;
						  margin-right: 10%;
						}

		.top-row > div:last-child {
						  margin: 0;
						}

		h1 {
			  text-align: center;
			  color: #ffffff;
			  font-weight: 300;
			  margin: 0 0 40px;
			  font-size: 50px;
			  font-family: 'Lobster', cursive;
			}


		
	</style>
</head>
<body>




<?php

if(isset($_POST['submit'])){

$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$autor=$_POST['autor'];
$localizacion=$_POST['localizacion'];
$categoria=$_POST['categoria'];
$fecha_publicacion=$_POST['fecha_publicacion'];
$fecha_original=$_POST['fecha_original'];

$nombre_img=$_FILES['imagen']['name'];
$tipo=$_FILES['imagen']['type'];
$tamano=$_FILES['imagen']['size'];

if(($nombre_img==!NULL)&&($tamano<=900000))
{/*apertutra primer if*/

if (($tipo=="image/gif")

|| ($tipo=="image/jpeg")
|| ($tipo=="image/jpg")
|| ($tipo=="image/png"))

	{/*apertura segundo if*/

$directorio=$_SERVER['DOCUMENT_ROOT'].'/head/Archivo-Fotografico/plantilla1/imagenes/';

move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$nombre_img);

	}/*cierre segundo if*/


	else
		{/*apertura primer else*/

		echo "No se puede subir una imagen con ese formato";

		}/*cierre primer else*/	


}/*cierre primer if*/


		else    {/*apertura segundo else*/

	if($nombre_img==!NULL) {echo "La imagen es demasiado grande";}


				}/*cierre segundo else*/




$conexion = mysqli_connect('localhost','root','','basedatos1');

$consulta="INSERT INTO fotos(titulo, descripcion, autor, localizacion, categoria, fecha_publicacion, fecha, url) 

values('".$titulo."', '".$descripcion."', '".$autor."', '".$localizacion."', '".$categoria."', '".$fecha_publicacion."', '".$fecha_original."', '".$nombre_img."')";

$resultado=mysqli_query($conexion, $consulta);

echo 'Insertada foto ' .$titulo.' a la base de datos';

mysqli_close($conexion);

}

?>

<form enctype="multipart/form-data" action="formulario_fotos.php" method="POST">

   <h1>Sube tu Foto</h1>

		<div class="top-row">
		<div class="field-wrap">
		<label for="titulo">Título:</label><br>
		<input type="text" name="titulo" id="titulo"><br>
		<br>
		</div>

		<div class="field-wrap">
		<label for="descripcion">Descripción::</label><br>
		<input type="text" name="descripcion" id="descripcion"><br>
		<br>
		</div>
		</div>

		<label for="autor">Autor:</label><br>
		<input type="text" name="autor" id="autor"><br>
		<br>

		<label for="localizacion">Localización:</label><br>
		<input type="text" name="localizacion" id="localizacion"><br>
		<br>

		<label for="categoria">Categoría:</label><br>
		<input type="text" name="categoria" id="categoria"><br>
		<br>

		<div class="top-row">
		<div class="field-wrap">
		<label for="fecha_publicacion">Fecha Publicación:</label><br>
		<input type="date" name="fecha_publicacion" id="fecha_publicacion"><br>
		<br>
		</div>

		<div class="field-wrap">
		<label for="fecha_original">Fecha Original:</label><br>
		<input type="date" name="fecha_original" id="fecha_original"><br>
		<br>
		</div>
		</div>

		<div class="top-row">
		<label for="imagen">Subir Foto</label>	<br>
		<input type="file" name="imagen" id="imagen">

		</div><br><br>

		<input type="submit" name="submit" value="Enviar" id="boton">

		

   	</form> 

  

</body>
</html>


