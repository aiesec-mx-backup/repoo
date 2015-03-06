<?php

session_start();

if(!(isset($_SESSION['user']))) {
	header("Location: index.php");
}

require("../js/connection.php");

$added = "";

if (isset($_POST['id'])) {
	$del = "delete from curso where id = " .$_POST['id'];
	$res2 = mysqli_query($connection, $del);
	$added = "Sesion Eliminada";
}

$query = "select * from curso";
$result = mysqli_query($connection, $query);

?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>AIESEC ACADEMY</title>
<link rel="shortcut icon" href="../img/favicon.ico" />
<meta name="description" content="">
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" media="screen" href="../css/superfish.css"/>
<link rel="stylesheet" href="../css/nivo-slider.css" media="all"/>
<link rel="stylesheet" href="../css/tweet.css" media="all"/>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/curso.css">
<link rel="stylesheet" media="all" href="../css/lessframework.css"/>
<link rel="stylesheet" media="all" href="../cssmenu/menu_source/styles.css"/>
<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="../js/modernizr-2.5.3.min.js"></script>
</head>
<body>

<!-- HEADER -->
<header>
<!-- header wrapper -->

<div class="wrapper cf">
	<div style="position: absolute; left: 20px; top: 5px;">
	<a href="../index.html"><img src="../img/logo_AA-02.png" alt="" height="20%" width="20%"/></a></div>
 </div>
<!-- ENDS header wrapper -->
<!-- nav -->
</div>
<!-- ends nav -->
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div role="main" id="main" style="position: relative; right: -30px; top: 0px;">
	<div id="navs">
		<a href="add.php">Add</a> |
		<a href="edit.php">Edit</a> |
		<a href="delete.php">Delete</a> |
		<a href="logout.php">Logout</a>
	</div>
	<div class="wrapper">
		<div><?php echo $added ?></div>
		<h3>Eliminar Sesion</h3>
		<?php 

		while($row = mysqli_fetch_assoc($result)) {
			echo '<div class="result">';
			echo '<form method="post">';
			echo '<p><h3>'.$row['titulo'].'</h3></p>';
			echo '<p class="result_desc"> '.$row['descripcion'].'</p>';
			echo '<input type="hidden" name="id" value="'.$row['id'].'">';
			echo '<input type="submit" value="Eliminar Sesion"></form></div>';
		}

		?>	
	</div>
</div>
<!-- ENDS MAIN -->
<footer>
	<div id="footer-bottom">
		<p><strong> 
<table width="1200">
<tr>
  <td> <font color="26527C" size="+5" > Other links </font></td>
  <td><a href="http://aiesec.org.mx">aiesec.org.mx</a></td> 
  <td><a href="http://myaiesec.net">MyAIESEC.net</a></td>
  <td><a href="http://vivamexico.aiesec.org.mx">¡Viva Mexico!</a></td>
</tr>
</table> </strong></p></div>
</div>
</footer>
<!-- JavaScript at the bottom for fast page loading -->
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/jquery-1.7.1.min.js"><\/script>')</script>
<!-- scripts concatenated and minified via build script -->
<script src="../js/custom.js"></script>
<!-- superfish -->
<script src="../js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="../js/superfish-1.4.8/js/superfish.js"></script>
<script src="../js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<script src="../js/tweet/jquery.tweet.js"></script>
<script src="../js/jquery.isotope.min.js"></script>
<script src="../js/jquery.nivo.slider.js"></script>
<script src="../js/css3-mediaqueries.js"></script>
<script src="../js/tabs.js"></script>
<script src="../js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
<!-- Page script -->
<script src="../js/curso.js"></script>
<!-- end scripts -->
</body>
</html>