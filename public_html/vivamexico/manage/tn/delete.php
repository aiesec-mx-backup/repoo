<?php

require("../../php/connection.php");

$added = "";

if (isset($_POST['id'])) {
	$del = "delete from TN where id = " .$_POST['id'];
	$res2 = mysqli_query($connection, $del);
	$added = "TN Eliminado";
}

$query = "select * from TN";
$result = mysqli_query($connection, $query);

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Viva Mexico| Delete TN</title>
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
										<li><a href="../../igcdp/sl.html">Sharing Lenguages</a></li>
										<li><a href="../../igcdp/mlb.html">My Lenguage Buddy</a></li>
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
			</div>
			<div id="form">
				<?php echo $added ?>
				<?php
					while($row = mysqli_fetch_assoc($result)) {
						echo '<div class="result">';
						echo '<form action="" method="post">';
						echo '<p>TN ID: '.$row['codigo'].'</p>';
						echo '<p>Nombre: '.$row['nombre'].'</p>';
						echo '<p>Proyecto: '.$row['proyecto'].'</p>';
						echo '<p>Comite: '.$row['comite'].'</p>';
						echo '<p>Estado: '.$row['estado'].'</p>';
						echo '<input type="hidden" name="id" value="'.$row['id'].'">';
						echo '<input type="submit" value="Eliminar TN">';
						echo '</form>';
						echo '</div>';
					}
				?>
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