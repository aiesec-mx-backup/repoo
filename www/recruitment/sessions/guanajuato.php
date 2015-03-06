<?php

require("../js/connection.php");

$ubi = 'guanajuato';

$query = "select * 
		  from session s, lc l 
		  where s.idLc =  l.id
		  and l.ubi = '" . $ubi . "'
		  order by fecha";

$result = mysqli_query($connection,$query);

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
<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css" media="screen" />
</head>
<body>
<div class="header-about">	
	<div class="header-top">
		<div class="wrap"> 	
		 <div class="top-nav">
					<ul>
						<li><a href="../index.php">Inicio</a></li>
						<li><a href="../about.html">Acerca de AIESEC</a></li>
						<li><a href="../programs.html">Programas</a></li>
						<li class="active"><a href="../sessions.html">Sesiones</a></li>
						<li><a href="../contact.html">Cont&#193;ctanos</a></li>
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
						<h3>Lista de Sesiones</h3>
					    <div id="list">
					    <?php
					    	while($row = mysqli_fetch_assoc($result)) {
								echo '<div class="sessionbox">';
								echo '<p>Global '.$row['prog'].'</p>';
								echo '<p><b>Tipo:</b> '.$row['tipo'].'</p>';

								if ($row['tipo'] == 'Virtual')
									echo '<p></b>Link:</b> '.$row['link'].'</p>';
								else
									echo '<p></b>Ubicacion:</b> '.$row['link'].'</p>';
				
								echo '<p><b>Fecha: </b>'.$row['fecha'].'</p>';
								echo '</div><br /><br />';
							}
					    ?>
					    </div>			    
					</div>
					<div class="clear"></div> 			
		        </div>
			</div>
		</div>
		
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 AIESEC Mexico</p>
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            