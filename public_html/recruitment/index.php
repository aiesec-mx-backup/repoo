<?php
require 'fb/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '658753464168339',
  'secret' => 'a941e1b455357295dc52f6736f18dcf2',
));

// Get User ID
$user = $facebook->getUser();

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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">	
	<div class="header-top">
		 <div class="wrap"> 
		 <div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Inicio</a></li>
						<li><a href="about.html">Acerca de AIESEC</a></li>
						<li><a href="programs.html">Programas</a></li>
						<li><a href="sessions.html">Sesiones</a></li>
						<li><a href="contact.html">Cont&#193;ctanos</a></li>
					</ul>
				</div>
		  <div class="clear"></div> 
	   </div>
    </div>	
	<div class="header-bottom">
		<div class="wrap">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt=""></a>
				</div>
			  <div class="clear"></div> 
	    </div>
    </div>
</div>
      <!-- Slider -->
		  <div class="slider">
	      	<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	            	<img src="images/banner2.jpg" alt="" />
	                <img src="images/banner1.jpg" alt="" />
	                <img src="images/banner3.jpg" alt="" />
	            </div>
	        </div>
   		</div>
		<!-- End Slider -->
		<div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<div class="tab-img" style="text-align:center;">
				        <div class="chair">
				         <p>Acerca de AIESEC</p>
				       </div>
     				</div>
					<p class="desc">Conoce mas de AIESEC</p>
					<div class="more">
						<a href="about.html" class="btn">mas...</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="tab-img" style="text-align:center;">
				        <div class="chair">
				         <p>Programas</p>
				       </div>
     				</div>
					<p class="desc">Lee acerca de nuestras oportunidades</p>
					<div class="more">
						<a href="programs.html" class="btn">mas...</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="tab-img" style="text-align:center;">
				        <div class="chair">
				         <p>Lista de Sesiones</p>
				       </div>
     				</div>
					<p class="desc">Busca una sesion cerca de ti</p>
					<div class="more">
						<a href="sessions.html" class="btn">mas...</a>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="tab-img" style="text-align:center;">
				        <div class="chair">
				         <p>Contacto</p>
				       </div>
     				</div>
					<p class="desc">Mandamos un mensaje con tus dudas</p>
					<div class="more">
						<a href="contact.html" class="btn">mas...</a>
					</div>
				</div>
				<div class="clear"></div> 
			</div>
			</div>
		</div>
		
			   <div class="clear"></div> 
		    </div>
			</div>
		</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			<p> © 2014 AIESEC Mexico</a></p>
		</div>
 	</div>
 </div>
</body>
</html>