<?php

		$formatos = array('.jpg', '.png', '.docx', 'xlsx');
		if (isset($_POST['boton'])){
			$nombreArchivo = $_FILES['archivo']['name'];
			$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
			$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
			if (in_array($ext, $formatos)){
					if(move_uploaded_file($nombreTmpArchivo, "archivos/$nombreArchivo")){

						echo"EL ARCHIVO $nombreArchivo HA SIDO SUBIDO EXITOSAMENTE!!!!";

					}else{
						echo"Ocurrio un error.";


					}



			}else{
				echo "ERES IDIOTA??, EL ARCHIVO NO ES PERMITIDO";



				}
		} 

?>



<!DOCTYPE html>
<html lang="es">
	<head>
		<title>SUBIR ARCHIVOS Y MOSTRARLOS EN UN DIRECTORIO PHP -
		<meta charset= "utf-8" />
		<meta description="Como Subir Archivos, Imágenes, ETC y mostrar su contenido en un director" />

		<link rel= "stylesheet" href="estilo.css"/>

	</head>

	<body>
		<div class="caja">
		<form method="post" action=""	enctype="multipart/form-data">
			<h1>SUBIENDO ARCHIVOS</h1>
			<input type="file" name="archivo" /> <br/>
			<input type="submit" value= "Subir Archivo" name="boton"/>

		
		</form>
		</div>
		<div id="TW"> mail: edwardokevin92@gmail.com</div>

	</body>
	</html>