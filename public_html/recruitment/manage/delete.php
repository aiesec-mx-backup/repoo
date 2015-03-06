<?php

session_start();

if(!(isset($_SESSION['user']))) {
	header("Location: index.php");
}

require("../js/connection.php");

$added = "";

if (isset($_POST['id'])) {
	$del = "delete from session where id = " .$_POST['id'];

	$res2 = mysqli_query($connection, $del);

	$added = "Sesion Eliminada";
}

$query = "select * from session";

if ($_SESSION['user']['mail'] != 'nst')
	$query .= " where idLc = " . $_SESSION['user']['id'];

$result = mysqli_query($connection, $query);



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
<!-- light-box -->
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.mousewheel-3.0.6.pack.js"></script>	
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
<script type="text/javascript" src="../js/lista.js"></script>
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" media="screen" />
<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();

		});
</script>
</head>
<body>
<div class="header-about">	
	<div class="header-top">
		<div class="wrap"> 	
		 <div class="top-nav">
					<ul>
						<li><a href="../index.php">Volver</a></li>
						<li><a href="edit.php">Editar</a></li>
						<li><a href="add.php">Agregar</a></li>
						<li class="active"><a href="delete.php">Borrar</a></li>
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
						<h3>Eliminar Sesion</h3>
						<?php 

						while($row = mysqli_fetch_assoc($result)) {
							echo '<form method="post"><span>Global '.$row['prog'].'</span><br/ >';
							echo '<span>Tipo: </span><span>'.$row['tipo'].'</span><br/ >';
							echo '<span>Link/Direccion: </span><span>'.$row['link'].'</span><br/ >';
							echo '<span>Fecha: </span><span>'.$row['fecha'].'</span><br/ >';
							echo '<input type="hidden" name="id" value="'.$row['id'].'">';
							echo '<input type="submit" value="Eliminar Sesion"></form><br />';
						}

						?>	
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
</html>

    	
    	
            