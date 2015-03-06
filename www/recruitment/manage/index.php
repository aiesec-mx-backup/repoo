<?php

session_start();

if(isset($_SESSION['user'])) {
	header("Location: edit.php");
}

//redirecciona de aqui al crear o fallar al crear la session
if(!empty($_POST)) {
	require("../js/connection.php");
	
	$query = "select * from lc where mail='" . $_POST['mail'] ."'";

	$result = mysqli_query($connection, $query);
		
	if($row = mysqli_fetch_assoc($result)) {
		$_SESSION['user'] = $row;

		header("Location: edit.php");
	}
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
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../about.html">Acerca de AIESEC</a></li>
						<li><a href="../programs.html">Nuestros Programas</a></li>
						<li class="active"><a href="../sessions.html">Sesiones</a></li>
						<li><a href="../contact.html">Contactanos</a></li>
					</ul>
				</div>
		  <div class="clear"></div> 
	   </div>
    </div>	
	<div class="header-bottom">
		<div class="wrap">
				<div class="logo">
					<a href="../index.php"><img src="../images/logo.png" alt=""></a>
				</div>
			<div class="clear"></div> 
	    </div>
    </div>
</div>
      <div class="content-top">
			<div class="wrap">
				<div class="section group">
					<div class="cont span_2_of_3">
						<form action="index.php" method="post">
							<span>Mail: </span><span><input type="text" name="mail"></span><br />
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
</html>

    	
    	
            