<?php

$added = "";

if ($_POST) {

	require("../../php/connection.php");

	$query = "insert into Tn (tipo, codigo, proyecto, nombre, link, comite, estado)
			  values ('".$_POST['tipo']."','".$_POST['codigo']."','".$_POST['proyecto']."','".$_POST['nombre']."','".$_POST['link']."','".$_POST['comite']."','".$_POST['estado']."')";

	$result = mysqli_query($connection, $query);

	if ($result)
		$added = "TN agregada, su id es " . mysqli_insert_id($connection);
	else
	{
		echo $query;
		$added = "Error";
	}
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Viva Mexico| Add TN</title>
		<link rel="../../shortcut icon" href="../../images/VMex_azul.ico">
		<link href="../../css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="../../js/jquery.min.js"></script>
		<!---script---->
		<!---//script---->
		<!---smoth-scrlling---->
			<script type="text/javascript">
				$(document).ready(function(){
									$('a[href^="#"]').on('click',function (e) {
									    e.preventDefault();
									    var target = this.hash,
									    $target = $(target);
									    $('html, body').stop().animate({
									        'scrollTop': $target.offset().top
									    }, 1000, 'swing', function () {
									        window.location.hash = target;
									    });
									});
								});
				</script>
		<!---//smoth-scrlling---->
		<!----start-top-nav-script---->
		<script type="text/javascript" src="../../js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="../../stylesheet" href="../../css/fwslider.css" media="all">
		<script src="../../js/jquery-ui.min.js"></script>
		<script src="../../js/css3-mediaqueries.js"></script>
		<script src="../../js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="../../stylesheet" href="../../css/jquery-ui.css" />
		<!---//calender-style---->
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
			<div class="top-header" id="header">
				<div class="wrap">
				<div class="top-header-left">
					<ul>
						<li><a href="../../#"></a></li>
						<li><a href="../../#"></a></li>
						<li><p>You want to know more about AIESEC? </p>&nbsp;<a class="reg" href="../../http://aiesec.org.mx"> Click here</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a class="face" href="../../https://www.facebook.com/AIESECMX" target="_blank"><span> </span></a></li>
						<li><a class="twit" href="../../https://twitter.com/AIESECMexico" target="_blank"><span> </span></a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<!----//End-top-header----->
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!--- start-logo---->
				<div class="logo">
					<a href="../../index.html"><img src="../../images/logo.png" title="¡Viva Mexico!"/></a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
						<ul class="flexy-menu thick orange">
							<li><a href="../../index.html">Why Mexico?</a></li>
							<!--<li><a href="../../destinations.html">Destinations</a>
								<ul>
								<li><a href="../../#">Dropdown item</a></li>
								<li><a href="../../#">Dropdown item</a></li>
								<li><a href="../../#">Dropdown item</a>
									<ul>
										<li><a href="../../#">Dropdown item</a></li>
										<li><a href="../../#">Dropdown item</a>
											<ul>
												<li><a href="../../#">Dropdown item</a></li>
												<li><a href="../../#">Dropdown item</a></li>
												<li><a href="../../#">Dropdown item</a></li>
												<li><a href="../../#">Dropdown item</a></li>
											</ul>
										</li>
										<li><a href="../../#">Dropdown item</a></li>
										<li><a href="../../#">Dropdown item</a></li>
									</ul>
								</li>
								<li><a href="../../#">Dropdown item</a></li>
								<li><a href="../../#">Dropdown item</a></li>
							</ul>
							</li>-->
							<li><a href="../../igcdp.html">Volunteer<br>Internships</a>
								<ul>
								<li><a href="../../igcdp.html">National Projects</a>
									<ul>
										<li><a href="../../igcdp/sl.html">Sharing Languages</a></li>
										<li><a href="../../igcdp/mlb.html">My Language Buddy</a></li>
										<li><a href="../../igcdp/imporph.html">Impacting: Orphanages</a></li>
										<li><a href="../../igcdp/impsc.html">Impacting: Summer Camps</a></li>
										<li><a href="../../igcdp/gls.html">Global Leadership School</a></li>
										<li><a href="../../igcdp/stu.html">Social Start Up</a></li>
									</ul>
								</li>
								<li><a href="../../searchtn.php?t=Vol">Search TN Tool</a></li>
								</ul>
							</li>
							<li class="active"><a href="../../igip.html">Professional<br>Internships</a>
								<ul>
								<li><a href="../../igip.html">National Partners</a></li>
								<li><a href="../../searchtn.php?t=Pro">Search TN Tool</a></li>
								<li><a href="../../interest.html">Are you interested?</a></li>
								</ul>
							</li>
							<li><a href="../../GC.html">GCDP EPs</a>
								<ul>
								<li><a href="../../GC.html">Profiles</a></li>
								<li><a href="../../searchep.php?t=Vol">EP Search Tool</a></li>
								</ul>
							</li>
							<li><a href="../../GT.html">GIP EPs</a>
								<ul>
								<li><a href="../../GT.html">Profiles</a></li>
								<li><a href="../../searchep.php?t=Pro">EP Search Tool</a></li>
								</ul>
							</li>
							<li><a href="../../blog.html">Blog</a></li>
							<li><a href="../../contact.html">Contact</a></li>
						</ul>
						<!--<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>-->
						<!----search-scripts---->
						<script src="../../js/modernizr.custom.js"></script>
						<script src="../../js/classie.js"></script>
						<script src="../../js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				</div>
				<!--- //End-top-nav---->
				<div class="clear"> </div>
			</div>
			<!---//End-header---->
		</div>
		<!----start-images-slider---->
		<div class="offers">
			<div class="offers-head">
		<div class="content">
			<div id="nav">
				<a class="btn" href="../index.php">Back</a>
				<a class="btn" href="add.php">Add</a>
				<a class="btn" href="edit.php">Edit</a>
				<a class="btn" href="delete.php">Delete</a>
			</div><br>
			<div id="form">
				<?php echo $added ?>
				<form action="" method="post">
					<p>Tipo:</p>
					<p> <select name="tipo">
						<option value="Vol">Voluntariado</option>
						<option value="Pro">Practicas</option>
					</select></p>
					<p>Id:</p>
					<p> <input type="text" name="codigo" /></p>
					<p>Proyecto:</p>
					<p> <input type="text" name="proyecto" /></p>
					<p>Nombre:</p>
					<p> <input type="text" name="nombre" /></p>
					<p>Link a la TN:</p>
					<p> <input type="text" name="link" size="100"/></p>
					<p>Comite: </p>
					<p><select name="comite">
						<option value="">Selecciona uno</option>
						<option value="Aguascalientes">Aguascalientes</option>
						<option value="Chihuahua">Chihuahua</option>
						<option value="Ciudad Juarez">Ciudad Juarez</option>
						<option value="Cuernavaca">Cuernavaca</option>
						<option value="Estado de Mexico">Estado de Mexico</option>
						<option value="Guadalajara">Guadalajara</option>
						<option value="Guanjuato">Guanjuato</option>
						<option value="Hermosillo">Hermosillo</option>
						<option value="IPN">IPN</option>
						<option value="ITAM">ITAM</option>
						<option value="ITESM Monterrey">ITESM Monterrey</option>
						<option value="ITESM Toluca">ITESM Toluca</option>
						<option value="Laguna">Laguna</option>
						<option value="Leon">Leon</option>
						<option value="Merida">Merida</option>
						<option value="Puebla">Puebla</option>
						<option value="Queretaro">Queretaro</option>
						<option value="San Luis Potosi">San Luis Potosi</option>
						<option value="Santa Fe">Santa Fe</option>
						<option value="Sinaloa">Sinaloa</option>
						<option value="Tabasco">Tabasco</option>
						<option value="UAEMex">UAEMex</option>
						<option value="UdeM">UdeM</option>
						<option value="ULSA">ULSA</option>
						<option value="UNAM">UNAM</option>
						<option value="UP">UP</option>
						<option value="Veracruz">Veracruz</option>
						<option value="Zacatecas">Zacatecas</option>
						<!--
						<option value="Celaya">Celaya</option>
						<option value="Irapuato">Irapuato</option>
						<option value="Los Mochis">Los Mochis</option>
						<option value="Mazatlan">Mazatlan</option>
						<option value="Poza Rica">Poza Rica</option>
						<option value="Tlaxcala">Tlaxcala</option>
						<option value="Saltillo">Saltillo</option>
						<option value="Silao">Silao</option>
						-->
					</select></p>
					<p>Estado: </p>
					<p><select name="estado">
						<option value="">Selecciona uno</option>
						<option value="Aguascalientes">Aguascalientes</option>
						<option value="Baja California">Baja California</option>
						<option value="Baja California Sur">Baja California Sur</option>
						<option value="Campeche">Campeche</option>
						<option value="Chiapas">Chiapas</option>
						<option value="Chihuahua">Chihuahua</option>
						<option value="Coahuila">Coahuila</option>
						<option value="Colima">Colima</option>
						<option value="Distrito Federal">Distrito Federal</option>
						<option value="Durango">Durango</option>
						<option value="Estado de México">Estado de México</option>
						<option value="Guanajuato">Guanajuato</option>
						<option value="Guerrero">Guerrero</option>
						<option value="Hidalgo">Hidalgo</option>
						<option value="Jalisco">Jalisco</option>
						<option value="Michoacan">Michoacan</option>
						<option value="Morelos">Morelos</option>
						<option value="Nayarit">Nayarit</option>
						<option value="Nuevo Leon">Nuevo Leon</option>
						<option value="Oaxaca">Oaxaca</option>
						<option value="Puebla">Puebla</option>
						<option value="Querétaro">Querétaro</option>
						<option value="Quintana Roo">Quintana Roo</option>
						<option value="San Luis Potosi">San Luis Potosi</option>
						<option value="Sinaloa">Sinaloa</option>
						<option value="Sonora">Sonora</option>
						<option value="Tabasco">Tabasco</option>
						<option value="Tamaulipas">Tamaulipas</option>
						<option value="Tlaxcala">Tlaxcala</option>
						<option value="Veracruz">Veracruz</option>
						<option value="Yucatan">Yucatan</option>
						<option value="Zacatecas">Zacatecas</option>
					</select></p><br>
					<input class="btn" type="submit" value="Ok">
				</form>
			</div>
		</div>
		</div>
		</div>
		<!----start-find-place
		<div class="find-place">
			<div class="wrap">
				<div class="p-h">
					<span>FIND YOUR</span>
					<label>HOLYDAYS</label>
				</div>
				<!---strat-date-piker
				  <script src="../../http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
				  <script>
				  $(function() {
				    $( "#datepicker" ).datepicker();
				  });
				  </script>
				<!---/End-date-piker
				<div class="p-ww">
					<form>
						<span> Where</span>
						<input class="dest" type="text" value="Distination" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Distination';}">
						<span> When</span>
						<input class="date" id="datepicker" type="text" value="Select date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Select date';}">
						<input type="submit" value="Search" />
					</form>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-find-place---->
		<!---start-subfooter---->
		<div class="subfooter">
			<div class="wrap">
				<p class="copy-right">Copyright 2014 AIESEC Mexico - All rights reserved.<br>Developed by Steelerboy & Luis Sifuentes</a></p>
				<a class="to-top" href="../../#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>