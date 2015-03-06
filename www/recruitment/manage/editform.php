<?php

session_start();

if(!(isset($_SESSION['user']))) {
	header("Location: index.php");
}

$added = "";

if (isset($_POST['fecha']) && isset($_POST['tipo'])) {

	require("../js/connection.php");

	$query = "update session
			  set prog = '".$_POST['prog']."', tipo = '".$_POST['tipo']."', link = '".$_POST['link']."', fecha = STR_TO_DATE('".$_POST['fecha']."','%Y/%m/%d %H:%i')
			  where id = " .$_POST['idses'];

	$result = mysqli_query($connection, $query);

	if ($result)
		$added = "Sesion modificada: " . $_POST['fecha'];
	else
		$added = "Error";

}

?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Reclutamiento AIESEC</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="../css/jquery.datetimepicker.css"/ >
</head>
<body>
<div class="header-about">	
	<div class="header-top">
		<div class="wrap"> 	
		 <div class="top-nav">
					<ul>
						<li><a href="../index.php">Volver</a></li>
						<li class="active"><a href="edit.php">Editar</a></li>
						<li><a href="add.php">Agregar</a></li>
						<li><a href="delete.php">Borrar</a></li>
					</ul>
				</div>
		  <div class="clear"></div> 
	   </div>
    </div>	
	<div class="header-bottom">
		<div class="wrap">
				<div class="logo">
					<a href="index.html"><img src="../images/logo.png" alt=""></a>
				</div>
				<div class="header-right">
					<a href="logout.php">Logout</a>
				</div>
			<div class="clear"></div> 
	    </div>
    </div>
</div>
      <div class="content-top">
			<div class="wrap">
				<div class="section group">
					<div class="cont span_2_of_3">
						<div><?php echo $added ?></div>
						<h3>Modificar Sesion</h3>
						<form method="post">
							<span>Programa: </span>
							<span>
								<select name="prog">
									<option value="Talent">Global Talent</option>
									<option value="Citizen">Global Citizen</option>
								</select>
							</span><br />
							<span>Tipo: </span>
							<span>
								<select name="tipo">
									<option value="Presencial">Presencial</option>
									<option value="Virtual">Virtual</option>
								</select>
							</span><br />
							<span>Link/Direccion</span><br />
							<span><input type="text" name="link" size="100"></span><br />
							<span>Fecha</span><br />
							<span><input id="datepk" type="text" name="fecha"></span><br />
							<?php echo '<input type="hidden" name="idses" value="'.$_GET['id'].'">'; ?>
							<input type="submit" value="Ingresar">
						</form>
					</div>
					<div class="clear"></div> 			
		        </div>
			</div>
		</div>
		
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2013 AIESEC Mexico</p>
		</div>
 	</div>
 </div>
</body>
<!-- date-time -->
<script src="../js/jquery.js"></script>
<script src="../js/jquery.datetimepicker.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$('#datepk').datetimepicker({
				step:15
			});
		});
</script>
</html>

    	
    	
            