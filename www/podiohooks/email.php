<?php

require_once 'podio-php-4.0.1/PodioAPI.php';

function spamcheck($field) {
	// Sanitize e-mail address
	$field=filter_var($field, FILTER_SANITIZE_EMAIL);
	// Validate e-mail address
	if(filter_var($field, FILTER_VALIDATE_EMAIL)) {
		return true;
	} else {
		return false;
	}
}

Podio::setup('gc-registration','xdLqJDYopEVsOw0PkERDeafDtGmTpVsOD9tJbf417tt4czrd8uMw0TjFM2mpo9eE');

try {
	$app_id = '6663336';
	$app_token = '1b89dbda4408499e9c55548e36e67293';

	Podio::authenticate_with_app($app_id, $app_token);
	
	switch ($_POST['type']) {
  		case 'hook.verify':
    	// Validate the webhook
    	PodioHook::validate($_POST['hook_id'], array('code' => $_POST['code']));
		
		case 'item.create':
			//$file = 'emails.txt';
			
			$item_id = $_POST['item_id']; //Gets the id of the new item
			$email_id = '51750326'; //email of the person
			$lc_id = '51750331';
			
			$data = PodioItem::get_field_value( $item_id, $email_id );
			$email = $data[0]["value"];
			
			$data = PodioItem::get_field_value( $item_id, $lc_id );
			$lc = $data[0]["value"]["title"];
			
			if(spamcheck($email)) {
				$from = "contacto@aiesec.org.mx";
				$subject = "Bienvenid@ al Programa Global Citizen";
				$headers = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= "From: Contacto AIESEC <$from>" . "\r\n";
      			$message1 = <<<END
<html>
<body>
<div style="text-align:center">
	<img src="https://dl.dropboxusercontent.com/u/51931317/autoresponse_header.png">
	<br>
</div>

<div>
	<p style="font-family: 'trebuchet ms',sans-serif">
	<i><strong>Estimado aplicante a GLOBAL CITIZEN:&nbsp;</strong></i></div>
	</p>
	<p style="font-family: verdana,helvetica,sans-serif">
		Si est&aacute;s recibiendo este correo es porque
		<strong style="font-family:'trebuchet ms',sans-serif">TU REGISTRO para el programa <i>Global
		Citizen</i>&nbsp;ha sido exitoso.&nbsp;</strong>
	</p>
	<p style="font-family: verdana, sans-serif">
		Esto significa que est&aacute;s listo para continuar el proceso. El siguiente paso ser&aacute; agendar
		la fecha de tu <strong>entrevista</strong>.
	</p>
	<p style="font-family: verdana, sans-serif">
		Durante el proceso es necesario que utilices el mismo correo con el cual iniciaste el
		registro, al igual que tu nombre completo para poder programar tu fecha de entrevista
		correctamente.
		<br>
		A continuaci&oacute;n, una persona del &Aacute;rea de Intercambios Salientes Sociales del Comit&eacute;
		<strong>
END;
				$message2 = <<<END
		</strong> se pondr&aacute; en contacto contigo en las pr&oacute;ximas 48 horas.
	</p>
	<p style="font-family: verdana, sans-serif">
		En caso de tener alg&uacute;n problema con tu entrevista, no dudes en contactarnos para acordar horarios y/o fechas.
	</p>
	<p style="font-family: arial, sans-serif;text-align: center">
		<strong>&iexcl;Bienvenid@ al proceso!</strong>
	</p>
</div>
</body>
</html>
END;

				$message = $message1.$lc.$message2;
      			$message = wordwrap($message, 70);
      			
      			mail($email,$subject,$message,$headers);
			}
			
			//Add function to send email
			/*
			$handler = fopen($file,'a');
			fwrite($handler, $lc);
			fclose($handler);
			//*/
	}

}
catch (PodioError $e) {
	echo "There was an error, please check your request.";
}

?>