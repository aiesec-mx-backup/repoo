<?php

$res = "no";

if ($_GET) {

	require 'js/connection.php';

	$search = strtolower(trim($_GET['s']));

	$query = "select *
		  from curso c
		  where lower(descripcion) like '%" . $search . "%'";
		  //or lower(titulo) like '%" . $search . "%'";

	$result = mysqli_query($connection, $query);

	if ($result) {
		$res = "yes";
	}
	else {
		$res = "none";
	}
}

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
<meta name="description" content="">
<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" media="screen" href="css/superfish.css"/>
<link rel="stylesheet" href="css/nivo-slider.css" media="all"/>
<link rel="stylesheet" href="css/tweet.css" media="all"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/curso.css">
<link rel="stylesheet" media="all" href="css/lessframework.css"/>
<link rel="stylesheet" media="all" href="cssmenu/menu_source/styles.css"/>
<!-- All JavaScript at the bottom, except this Modernizr build.
	   Modernizr enables HTML5 elements & feature detects for optimal performance.
	   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="js/modernizr-2.5.3.min.js"></script>
</head>
<body>

<!-- HEADER -->
<header>
<!-- header wrapper -->

<div class="wrapper cf">
	<div style="position: absolute; left: 20px; top: 5px;">
	<a href="index.html"><img src="img/logo_AA-02.png" alt="" height="20%" width="20%"/></a></div>
 </div>
<!-- ENDS header wrapper -->
<!-- nav -->  
	<div id='cssmenu' style="position: absolute; left: 185px; top: -2px; z-index:100">
	  <ul>
	    <li class='active'><a href='index.html'><span>Home</span></a></li>
	    <li class='has-sub'><a href='#'><span>Faculties</span></a>
	      <ul>
	        <li class='has-sub'><a href='#'><span>AD</span></a>
	          <ul>
	            <li><a href='curso.html?id=1'><span>Trainee Management - GIP</span></a></li>
	            <li class='last'><a href='curso.html?id=2'><span>Trainee Management - GCDP</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>Alumni</span></a>
	          <ul>
	            <li><a href='curso.html?id=3'><span>BoA and SG generation, implementation & maintenance</span></a></li>
	            <li class='last'><a href='curso.html?id=4'><span>LLC Implementation and Engagement</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>Core</span></a>
	          <ul>
	            <li><a href='curso.html?id=5'><span>AIESEC Experience</span></a></li>
	            <li><a href='curso.html?id=6'><span>How to create a MyAiesec.net Account</span></a></li>
	            <li><a href='curso.html?id=7'><span>How to consolidate a BoA</span></a></li>
	            <li><a href='curso.html?id=8'><span>How to create a PODIO account</span></a></li>
	            <li><a href='curso.html?id=9'><span>How to design the perfect implementation strategy to any iniciative</span></a></li>
	            <li class='last'><a href='curso.html?id=10'><span>University Approach</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>ER</span></a>
	          <ul>
	            <li><a href='curso.html?id=11'><span>How to do a call</span></a></li>
	            <li><a href='curso.html?id=12'><span>How to get a successful meeting</span></a></li>
	            <li class='last'><a href='curso.html?id=13'><span>Meet your Product</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>iGCDP</span></a>
	          <ul>
	            <li><a href='curso.html?id=14'><span>Raising a TN Form (ICX)</span></a></li>
	            <li><a href='curso.html?id=15'><span>RaMaRe</span></a></li>
	            <li><a href='curso.html?id=	6'><span>Selling to NGO's</span></a></li>
	            <li class='last'><a href='curso.html?id=17'><span>ABC of Exchange</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>iGIP</span></a>
	          <ul>
	            <li><a href='curso.html?id=18'><span>Raising a TN Form (ICX)</span></a></li>
	            <li><a href='curso.html?id=19'><span>Auditing Process and Podio</span></a></li>
	            <li><a href='curso.html?id=20'><span>Matching in myaiesec.net</span></a></li>
	            <li><a href='curso.html?id=21'><span>Company and Trainee/ Acceptance Note</span></a></li>
	            <li><a href='curso.html?id=22'><span>RA-MA-RE Process in myaiesec.net</span></a></li>
	            <li class='last'><a href='curso.html?id=23'><span>Change TN from New to Available</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>OD</span></a>
	          <ul>
	            <li class='last'><a href='curso.html?id=24'><span>Gmail Label Tutorial</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>MKT</span></a>
	          <ul>
	            <li><a href='curso.html?id=25'><span>MyAIESEC.net: How to create teams, wikis and upload files</span></a></li>
	            <li><a href='curso.html?id=26'><span>MyAIESEC.net: How to manage the platform</span></a></li>
	            <li class='last'><a href='curso.html?id=27'><span>MyAIESEC.net: Common Problems</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>oGCDP</span></a>
	          <ul>
	            <li><a href='curso.html?id=28'><span>PODIO Basics I (OGX)</span></a></li>
	            <li><a href='curso.html?id=29'><span>PODIO Basics II (OGX)</span></a></li>
	            <li><a href='curso.html?id=30'><span>PODIO Practical (OGX)</span></a></li>
	            <li><a href='curso.html?id=31'><span>PODIO MANUAL (OGX)</span></a></li>
	            <li><a href='curso.html?id=32'><span>International cooperation</span></a></li>
	            <li><a href='curso.html?id=33'><span>MyAIESEC.net</span></a></li>
	            <li><a href='curso.html?id=34'><span>Product understanding</span></a></li>
	            <li><a href='curso.html?id=35'><span>X processes: publicity & raising</span></a></li>
	            <li class='last'><a href='curso.html?id=36'><span>Exchange Management</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>oGIP</span></a>
	          <ul>
	            <li><a href='curso.html?id=37'><span>PODIO Basics I (OGX)</span></a></li>
	            <li><a href='curso.html?id=38'><span>PODIO Basics II (OGX)</span></a></li>
	            <li><a href='curso.html?id=39'><span>PODIO OGX Management  (OGX)</span></a></li>
	            <li><a href='curso.html?id=40'><span>PODIO MANUAL (OGX)</span></a></li>
	            <li><a href='curso.html?id=41'><span>How to be the best EP manager</span></a></li>
	            <li><a href='curso.html?id=42'><span>Audit</span></a></li>
	            <li><a href='curso.html?id=43'><span>OPS Agenda</span></a></li>
	            <li><a href='curso.html?id=44'><span>What is Global Talents?</span></a></li>
	            <li><a href='curso.html?id=45'><span>Engineering segment</span></a></li>
	            <li><a href='curso.html?id=46'><span>Exchange Processes</span></a></li>
	            <li><a href='curso.html?id=47'><span>How to search for internship</span></a></li>
	            <li><a href='curso.html?id=48'><span>XPP</span></a></li>
	            <li class='last'><a href='curso.html?id=49'><span>How to fill EP AN</span></a></li>
              </ul>
            </li>
	        <li class='has-sub'><a href='#'><span>TM</span></a>
	          <ul>
	            <li><a href='curso.html?id=50'><span>Global Competency Model (advanced)</span></a></li>
	            <li><a href='curso.html?id=51'><span>Goal Setting</span></a></li>
	            <li><a href='curso.html?id=52'><span>Pipeline Management</span></a></li>
	            <li><a href='curso.html?id=53'><span>PODIO</span></a></li>
	            <li><a href='curso.html?id=54'><span>Talent Education</span></a></li>
	            <li><a href='curso.html?id=55'><span>TM Role & 12 TM Process Introduction</span></a></li>
	            <li><a href='curso.html?id=56'><span>Transition & Knowledge Management</span></a></li>
	            <li><a href='curso.html?id=57'><span>Induction</span></a></li>
	            <li><a href='curso.html?id=58'><span>Recruitment</span></a></li>
	            <li class='last'><a href='curso.html?id=59'><span>ABC Talent Management</span></a></li>
              </ul>
            </li>
          </ul>
        </li>
	    <li class='has-sub'><a href='#'><span>Tours</span></a>
	      <ul>
	        <li class='has-sub'><a href='tour.html?id=1'><span>Get to know the AIESEC Platforms</span></a></li>
	        <li class='has-sub'><a href='tour.html?id=2'><span>Get the AIESEC Full Scoop</span></a></li>
	        <li class='has-sub'><a href='tour.html?id=3'><span>New LCP Tour</span></a></li>
          </ul>
        </li>
	    <li class='has-sub'><a href='#'><span>Resource Centers</span></a>
	      <ul>
	        <li class='has-sub'><a href='#'><span>RC 1</span></a></li>
	        <li class='has-sub'><a href='#'><span>RC 2</span></a></li>
          </ul>
        </li>
	    <li class='has sub'><a href='#'><span>Become A Mentor!</span></a>
	      <ul>
	        <li class='has-sub'><a href='#'><span>About</span></a></li>
	        <li class='has-sub'><a href='#'><span>Content Submission</span></a></li>
	        <li class='has-sub'><a href='#'><span>Content Update</span></a></li>
          </ul>
        </li>
      </ul>
      <div style="position: relative; right: -210px; left:500px; top: -50px; z-index:100; max-width: 500px">
      	<form action="busqueda.php" method="get" >
			<input type="text" name="s" size="50"><input type="submit" value="Buscar">
		</form>
      </div>
    </div>

<!-- ends nav -->
</header>
<!-- ENDS HEADER -->
<!-- MAIN -->
<div role="main" id="main" style="position: relative; right: -30px; top: 0px;">
	<div class="wrapper">
		<!-- search-->
		<div class="search">
			<div id="bar">
				<form action="" method="get">
					<input type="text" name="s" size="100"><input type="submit" value="Buscar">
				</form>
			</div>
			<div id="content">
				<!-- lista de resultados -->
				<?php
				if ($res == "yes") {
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<div class="result">';
						echo '<a href="curso.html?id='.$row['id'].'" class="result_title">';
						echo '<p><h3>'.$row['titulo'].'</h3></p>';
						echo '<p class="result_desc"> '.$row['descripcion'].'</p>';
						echo '</div>';
					}
				}
				else if ($res == "none")
				{
					echo '<p>No se encontro algun resultado</p>';
				}
				?>
			</div>
		</div>
		<!-- end search -->
	</div>
</div>
<!-- ENDS MAIN -->
<footer>
	<div id="footer-bottom">
		<p><strong> 
<table width="1500">
<tr>
  <td> <font color="26527C" size="+5" > Other links </font></td>
  <td>www.aiesec.org.mx</td> 
  <td>myaiesec.net</td>
<td>vivamexico.aiesec.org.mx </td>
</tr>
</table> </strong></p>
	</div>
</div>
</footer>
<!-- JavaScript at the bottom for fast page loading -->
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
<!-- scripts concatenated and minified via build script -->
<script src="js/custom.js"></script>
<!-- superfish -->
<script src="js/superfish-1.4.8/js/hoverIntent.js"></script>
<script src="js/superfish-1.4.8/js/superfish.js"></script>
<script src="js/superfish-1.4.8/js/supersubs.js"></script>
<!-- ENDS superfish -->
<script src="js/tweet/jquery.tweet.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.nivo.slider.js"></script>
<script src="js/css3-mediaqueries.js"></script>
<script src="js/tabs.js"></script>
<script src="js/poshytip-1.1/src/jquery.poshytip.min.js"></script>
<!-- end scripts -->
</body>
</html>