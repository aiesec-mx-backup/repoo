<?php
		$aux="<a href=/tm/";
		$formatos = array('.jpg', '.png', '.docx', '.xlsx', '.pdf');
		$directorio = 'archivos';
		if (isset($_POST['boton'])){
			$nombreArchivo = $_FILES['archivo']['name'];
			$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
			$ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
			if (in_array($ext, $formatos)){
					if(move_uploaded_file($nombreTmpArchivo, "tm/$nombreArchivo")){
						$aux=$aux.$nombreArchivo.">"; 
						
						echo"EL ARCHIVO $nombreArchivo HA SIDO SUBIDO EXITOSAMENTE!!!!";
						echo"$aux";
						echo"clic aqui para descargar </a>";
					}else{
						echo"Ocurrio un error.";
					}
				}else{
				echo "EL ARCHIVO NO ES POSIBLE CARGAR";
				}
		} 
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>SUBIR ARCHIVOS Y MOSTRARLOS EN UN DIRECTORIO PHP - </title>
		<meta charset= "utf-8" />
		<meta description="Como Subir Archivos, Imágenes, ETC y mostrar su contenido en un director" />

		<link rel= "stylesheet" href="estilo.css"/>

	</head>

	<body>
		<div class="caja">
			<h1>ARCHIVOS EXISTENTES EN EL DIRECTORIO         </h1>
		<?php
			if($dir = opendir($directorio)){
				while($archivo = readdir($dir)){
					if($archivo != '.' && $archivo != '..'){
					echo "Archivo : <strong>$archivo</strong><br/>";	
				  }
				}

			}


		?>

		<form method="post" action=""	enctype="multipart/form-data">
			<h1>SUBIENDO ARCHIVOS</h1>
			<input type="file" name="archivo" /> <br/>
			<input type="submit" value= "Subir Archivo" name="boton"/>

		</form>
		</div>
		<div id="tw"> mail: edwardokevin92@gmail.com</div> <br/><br/>

	</body>
	</html>