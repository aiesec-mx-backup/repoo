<?php

$result = false;

if ($_POST) {

	require 'php/connection.php';
	require 'php/utils.php';

	$query = "select id, img_link
			  from Ep
			  where 1";


	if ($_POST['codigo'] != "")
	{
		$query .= " and lower(codigo) like %".$_POST['codigo']."%";
	}
	if ($_POST['nombre'] != "")
	{
		$query .= " and lower(nombre) like %".$_POST['nombre']."%";
	}
	if (isset($_POST['edu']) && $_POST['edu'] != "")
	{
		$query .= " and lower(educacion) like %".$_POST['edu']."%";
	}
	if ($_POST['prog'] != "")
	{
		$query .= " and lower(programa) like %".$_POST['prog']."%";
	}
	if ($_POST['pais'] != "")
	{
		$query .= " and lower(pais) like %".$_POST['pais']."%";
	}
	if ($_POST['epmail'] != "")
	{
		$query .= " and lower(email_ep) like %".$_POST['epmail']."%";
	}
	if ($_POST['manmail'] != "")
	{
		$query .= " and lower(email_man) like %".$_POST['manmail']."%";
	}
	if ($_POST['fecha'] != "")
	{
		$query .= " and inicio > STR_TO_DATE('".$_POST['fecha']."','%Y/%m/%d %H:%i')";
	}

	$result = mysqli_query($connection, $query);

}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Viva Mexico| EP List</title>
		<link rel="shortcut icon" href="images/VMex_azul.ico">
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> 
			addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="js/jquery.min.js"></script>
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
		<script type="text/javascript" src="js/flexy-menu.js"></script>
		<script type="text/javascript">$(document).ready(function(){$(".flexy-menu").flexymenu({speed: 400,type: "horizontal",align: "right"});});</script>
		<!----//End-top-nav-script---->
		<!---webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!---webfonts---->
		<!--start slider -->
	    <link rel="stylesheet" href="css/fwslider.css" media="all">
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<script src="js/fwslider.js"></script>
		<!--end slider -->
		<!---calender-style---->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<!---//calender-style---->
	</head>
	<body>
		<!----start-wrap---->
			<!----start-top-header----->
			<div class="top-header" id="header">
				<div class="wrap">
				<div class="top-header-left">
					<ul>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><p>You want to know more about AIESEC? </p>&nbsp;<a class="reg" href="http://aiesec.org.mx"> Click here</a></li>
						<div class="clear"> </div>
					</ul>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a class="face" href="https://www.facebook.com/AIESECMX" target="_blank"><span> </span></a></li>
						<li><a class="twit" href="https://twitter.com/AIESECMexico" target="_blank"><span> </span></a></li>
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
					<a href="index.html"><img src="images/logo.png" title="¡Viva Mexico!"/></a>
				</div>
				<!--- //End-logo---->
				<!--- start-top-nav---->
				<div class="top-nav">
						<ul class="flexy-menu thick orange">
							<li><a href="index.html">Why Mexico?</a></li>
							<!--<li><a href="destinations.html">Destinations</a>
								<ul>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a>
									<ul>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a>
											<ul>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
												<li><a href="#">Dropdown item</a></li>
											</ul>
										</li>
										<li><a href="#">Dropdown item</a></li>
										<li><a href="#">Dropdown item</a></li>
									</ul>
								</li>
								<li><a href="#">Dropdown item</a></li>
								<li><a href="#">Dropdown item</a></li>
							</ul>
							</li>-->
							<li><a href="igcdp.html">Volunteer<br>Internships</a>
								<ul>
								<li><a href="igcdp.html">National Projects</a>
									<ul>
										<li><a href="igcdp/sl.html">Sharing Languages</a></li>
										<li><a href="igcdp/mlb.html">My Language Buddy</a></li>
										<li><a href="igcdp/imporph.html">Impacting: Orphanages</a></li>
										<li><a href="igcdp/impsc.html">Impacting: Summer Camps</a></li>
										<li><a href="igcdp/gls.html">Global Leadership School</a></li>
										<li><a href="igcdp/stu.html">Social Start Up</a></li>
									</ul>
								</li>
								<li><a href="searchtn.php?t=Vol">Search TN Tool</a></li>
								</ul>
							</li>
							<li><a href="igip.html">Professional<br>Internships</a>
								<ul>
								<li><a href="igip.html">National Partners</a></li>
								<li><a href="searchtn.php?t=Pro">Search TN Tool</a></li>
								<li><a href="interest.html">Are you interested?</a></li>
								</ul>
							</li>
							<li><a href="GC.html">GCDP EPs</a>
								<ul>
								<li><a href="GC.html">Profiles</a></li>
								<li><a href="searchep.php?t=Vol">EP Search Tool</a></li>
								</ul>
							</li>
							<li><a href="GT.html">GIP EPs</a>
								<ul>
								<li><a href="GT.html">Profiles</a></li>
								<li><a href="searchep.php?t=Pro">EP Search Tool</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog</a></li>
							<li class="active"><a href="contact.html">Contact</a></li>
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
						<script src="js/modernizr.custom.js"></script>
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
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
		<div class="content">
			<div class="offers-head">
				<h3>Listing EPs for <?php if (isset ($_POST['tipo']) && $_POST['tipo']=="Vol") {echo 'oGCDP';} else {echo 'oGIP';} ?></h3>
			</div>
			<div class="eplist">
				<table>
					<?php
					if ($result) {

						$i = 0;

						while ($row = mysqli_fetch_assoc($result)) {
					
							
							if ($i%10 == 0)
							{
								if (floor($i/10) > 0)
								{
									echo '</tr>';
								}
								echo '<tr>';
							}
							echo '<td>';
							echo '<a href="epprofile.php?id='.$row['id'].'">';
							echo '<img src="'.$row['img_link'].'" width="100" height="100" />';
							echo '</a>';
							echo '</td>';

							$i++;

						} 

						echo '</tr>';
					}

					?>
				</table>
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
				  <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
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
				<a class="to-top" href="#header"><span> </span> </a>
			</div>
		</div>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>