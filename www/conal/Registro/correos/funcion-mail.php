	<?php
	$correo = $_GET["correo"];
	$pass = $_GET["Pass"];
		$objMensaje=Array(
			'para'		=>	$_GET["correo"],
			'cuerpo'	=>	'HEY AIESEC 
			Este correo te confirma que tu aplicación fue enviada correctamente.
			Pronto se abrirá el acceso al sistema donde obtendrás información más específica sobre la AGENDA y todos los detalles relacionados, tu acceso será por medio del correo y contraseña con la que te registraste.
			Tu correo registrado es: '. $correo .'
			Tu contraseña es: '. $pass .'

			Nos vemos en CONAL!',
			'asunto'	=>	'CONAL 2015'
		);
		
		if(mail($objMensaje['para'],$objMensaje['asunto'],$objMensaje['cuerpo'])){
			echo 'El mensaje se envi&oacute; correctamente!';
			header("Location: ../gracias.php");
		}else{
			header('Location: ../error.php?msj=2');
		}
	?>