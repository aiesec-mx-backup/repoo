<?php
include_once("model/consulta.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <title>Career Plan - AIESEC IPN</title>

	    <!---------- CSS ------------>
	    <link rel="stylesheet" type="text/css" href="./css/style.css">
	    <script language="javascript"></script>
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
	</head>

	<body>

	<?php 
	
//	print_r($_POST);

	$sql="SELECT `password` FROM  `master_user` WHERE  `email` =  '".$_POST['usuario']."';";
	$result = consulta($sql, $conexion);

	$sql2="SELECT `comite` FROM  `master_user` WHERE  `email` =  '".$_POST['usuario']."';";
	$comit = consulta($sql2, $conexion);

	if($_POST['password']==$result[0] && ($_POST['comite']==$comit[0] || $_POST['comite']=='ALL')){
		echo "Contraseña y Usuario Aceptados <br/>";
			if ($_POST['buscarMail']!="") {
				echo "<br/><p class='centerTitle'>PERSONAL INFO</p>";
				$user = consultaUsuarioComite($_POST['buscarMail'], $conexion, $_POST['comite']);
				if ($user!=NULL) {
					echo "<br/><p class='centerTitle'>SELF AWARENESS</p>";
					$self_awareness = consultaSA($_POST['buscarMail'], $conexion);

					echo "<br/><p class='centerTitle'>FODA</p>";
					$foda = consultaFoda($_POST['buscarMail'], $conexion);

					echo "<br/><p class='centerTitle'>TIMELINEs</p>";
					$sql="SELECT * FROM `timeline` WHERE  `email` =  '".$_POST['buscarMail']."';";
					$result = consultaAll($sql, $conexion);
				}
			}
			elseif ($_POST['buscarNombre']!="") {

				$sql="SELECT `email` FROM  `usuario` WHERE  `nombre` LIKE  '".$_POST['buscarNombre']."'";
				$emailUsuario = consulta($sql, $conexion);
				echo "<br/><p class='centerTitle'>PERSONAL INFO</p>";
				$user = consultaUsuarioComite($emailUsuario[0], $conexion, $_POST['comite']);
				if ($user!=NULL) {
					echo "<br/><p class='centerTitle'>SELF AWARENESS</p>";
					$self_awareness = consultaSA($emailUsuario[0], $conexion);

					echo "<br/><p class='centerTitle'>FODA</p>";
					$foda = consultaFoda($emailUsuario[0], $conexion);

					echo "<br/><p class='centerTitle'>TIMELINEs</p>";
					$sql="SELECT * FROM `timeline` WHERE  `email` =  '".$emailUsuario[0]."';";
					$result = consultaAll($sql, $conexion);
				}				
			}
	}
				else
				echo "Contraseña/Usuario incorrectos o No tienes permiso de ver el perfil de este usuario.";


	?>

	    <script type="text/javascript" src="js/functions.js"></script>  
	</body>
</html>