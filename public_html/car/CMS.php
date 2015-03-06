<?php
include_once("model/consulta.php");

$sql="SELECT `nombre`, `email` FROM `usuario`;";
$result = consulta($sql, $conexion);
//	echo "<pre>";
	//print_r($result);
	//echo "</pre>"
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
	<div id="signup-cms">
		<p class="Response">

			AIESEC - IPN <br/>Menú de administración del Career Plan.
			<br/>
			<br/>
			Esta página es para acceso único del VPTM y las personas que ella determine.

		</p>

		<form id="send" action="consultas.php" method="POST" target="resultado">

			<table id="cms" >
				<tr>
					<td>
						<p>
							<label for="usuario">Usuario: </label>
							<input id="usuario" type="text" name="usuario" value="" required="true" class="cms" />
						</p>
					</td>
					<td>
						<p>
							<label for="password">Password: </label>
							<input id="password" type="text" name="password" value="" class="cms" />
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<p>
							<label for="comite">Comité *</label>
							<select class="personalInfo" id="comite" type="text" name="comite" value="" required="true">
								<option value="IPN">IPN</option>
								<option value="GUA">Guanajuato</option>
								<option value="CDJ">CD Juárez</option>
								<option value="ZAC">Zacatecas</option>
								<option value="GDL">Guadalajara</option>
								<option value="Otro">Otro</option>
							</select>
							
						</p>
					</td>
					<td>
						<p class="commite_otro">
							<label for="otro">Otro</label>
							<input class="personalInfo" id="otro_comite" type="text" name="otro_comite" value="" />
						</p>
					</td>
				</tr>
			</table>
			<br/>
			<hr>  </hr>  
			<br/>
			<br/>

			<td>   <label for="buscar">Introducir el parámetro de búsqueda. Para mayor presición usar la opción del Email. </label></td>
			<table id="cms" >
				<tr>

					<td>
						<p>
							<label for="buscarNombre">Buscar por Nombre: </label>
							<input id="buscarNombre" type="text" name="buscarNombre" value="" class="cms" />
						</p>
					</td>
					<td>
						<p>
							<label for="buscarMail">Buscar por Email: </label>
							<input id="buscarMail" type="text" name="buscarMail" value="" class="cms" />
						</p>
					</td>

				</tr>

				<tr>

				</tr>
			</table>

			<p>
				<button id="submit" type="submit">Submit</button>
			</p>
		</form>
		<h3> Usuarios Registrados: </h3>
		<table>
			<tr>
				<td>Nombre: </td>
				<td>Email: </td>
			</tr>
			<?php consultaUsuarios($conexion); ?>
		</table>
	</div>
</body>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">
	$('.commite_otro').hide();
	$('#comite').on('change', function(e){
		if ($('#comite').val()=='Otro') {
			$('.commite_otro').show('slow');
		}
		else{
			$('.commite_otro').hide();
		}
	});       
</script>
</html>