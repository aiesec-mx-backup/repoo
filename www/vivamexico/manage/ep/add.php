<?php

$added = "";

if ($_POST) {

	$path = "";

	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	}
	else
	{
		$path = "images/eps/" . $_FILES["file"]["name"];
		$target = "../../" . $path;
		echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
		
		if (file_exists($target))
		{
			echo $_FILES["file"]["name"] . " already exists. ";
		}
	    else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],$target);
			echo "Stored in: ". $target;
		}
	}

	require("../../php/connection.php");

	$query = "insert into Ep (img_link,link,nombre,tipo,codigo,educacion,programa,inicia,pais,email_ep,email_man)
			  values ('".$path."','".$_POST['eplink']."','".$_POST['nombre']."','".$_POST['tipo']."','".$_POST['codigo']."','".$_POST['edu']."','".$_POST['prog']."',STR_TO_DATE('".$_POST['fecha']."','%Y/%m/%d %H:%i'),'".$_POST['pais']."','".$_POST['epmail']."','".$_POST['manmail']."')";

	$result = mysqli_query($connection, $query);

	if ($result)
		$added = "EP agregado, su id es " . mysqli_insert_id($connection);
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
		<title>Viva Mexico| Add EP</title>
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
				<form action="" method="post" enctype="multipart/form-data">
					<p>Upload Image:</p>
					<p> <input type="file" name="file" id="file"> </p>
					<p>EP ID:</p>
					<p> <input type="text" name="codigo" /></p>
					<p>Nombre:</p>
					<p> <input type="text" name="nombre" /></p>
					<p>Tipo:</p>
					<p> <select name="tipo">
						<option value="Vol">Voluntariado</option>
						<option value="Pro">Practicas</option>
					</select></p>
					<p>Educacion: *Solo se toma en cuenta si el tipo es Practicas</p>
					<p> <select name="edu">
						<option value="">Selecciona uno</option>
						<option value="it">IT</option>
						<option value="mkt">Marketing</option>
						<option value="bsns">Business</option>
						<option value="teach">Teaching</option>
					</select></p>
					<p>Programa/Issue: *Selecciona en base al tipo</p>
					<p> <select name="prog">
						<option value="">Selecciona uno</option>
						<option value="Health">Health</option>
						<option value="Social Entrepreneurship">Social Entrepreneurship</option>
						<option value="Education">Education</option>
						<option value="Environment">Environment</option>
						<option value="Culture">Culture</option>
						<option value="Business Administration">Business Administration</option>
						<option value="Marketing">Marketing</option>
						<option value="Engineering">Engineering</option>
						<option value="Teaching">Teaching</option>
						<option value="Information Technology">Information Technology</option>
					</select></p>
					<p>Start Date:</p>
					<p><input id="datepk" type="text" name="fecha"></p>
					<p>Link a la forma:</p>
					<p> <input type="text" name="eplink" size="100"/></p>
					<p>Pais: </p>
					<p><select name="pais">
						<option value="">Selecciona uno</option>
						<option value="Afghanistan">Afghanistan</option>
						<option value="Albania">Albania</option>
						<option value="Algeria">Algeria</option>
						<option value="Armenia">Armenia</option>
						<option value="Australia">Australia</option>
						<option value="Austria">Austria</option>
						<option value="Azerbaijan">Azerbaijan</option>
						<option value="Bahamas">Bahamas</option>
						<option value="Bahrain">Bahrain</option>
						<option value="Barbados">Barbados</option>
						<option value="Belgium">Belgium</option>
						<option value="Benin">Benin</option>
						<option value="Bolivia">Bolivia</option>
						<option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
						<option value="Botswana">Botswana</option>
						<option value="Brazil">Brazil</option>
						<option value="Bulgaria">Bulgaria</option>
						<option value="Burkina Faso">Burkina Faso</option>
						<option value="Burundi">Burundi</option>
						<option value="Cambodia">Cambodia</option>
						<option value="Cameroon">Cameroon</option>
						<option value="Canada">Canada</option>
						<option value="Cape Verde">Cape Verde</option>
						<option value="Mainland China">Mainland China</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Colombia">Colombia</option>
						<option value="Costa Rica">Costa Rica</option>
						<option value="Côte d'Ivoire">Côte d'Ivoire</option>
						<option value="Croatia">Croatia</option>
						<option value="Czech Republic">Czech Republic</option>
						<option value="Denmark">Denmark</option>
						<option value="Dominican Republic">Dominican Republic</option>
						<option value="Ecuador">Ecuador</option>
						<option value="Egypt">Egypt</option>
						<option value="El Salvador">El Salvador</option>
						<option value="Estonia">Estonia</option>
						<option value="Ethiopia">Ethiopia</option>
						<option value="Finland">Finland</option>
						<option value="France">France</option>
						<option value="Gabon">Gabon</option>
						<option value="Georgia">Georgia</option>
						<option value="Germany">Germany</option>
						<option value="Ghana">Ghana</option>
						<option value="Greece">Greece</option>
						<option value="Guatemala">Guatemala</option>
						<option value="Honduras">Honduras</option>
						<option value="Hong Kong">Hong Kong</option>
						<option value="Hungary">Hungary</option>
						<option value="Iceland">Iceland</option>
						<option value="India">India</option>
						<option value="Indonesia">Indonesia</option>
						<option value="Iran">Iran</option>
						<option value="Ireland">Ireland</option>
						<option value="Italy">Italy</option>
						<option value="Japan">Japan</option>
						<option value="Jordan">Jordan</option>
						<option value="Kazakhstan">Kazakhstan</option>
						<option value="Kenya">Kenya</option>
						<option value="Korea">Korea</option>
						<option value="Kuwait">Kuwait</option>
						<option value="Kyrgyzstan">Kyrgyzstan</option>
						<option value="Laos">Laos</option>
						<option value="Latvia">Latvia</option>
						<option value="Lebanon">Lebanon</option>
						<option value="Liberia">Liberia</option>
						<option value="Lithuania">Lithuania</option>
						<option value="Luxembourg">Luxembourg</option>
						<option value="Macedonia">Macedonia</option>
						<option value="Malaysia">Malaysia</option>
						<option value="Malta">Malta</option>
						<option value="Mauritius">Mauritius</option>
						<option value="Mexico">Mexico</option>
						<option value="Moldova">Moldova</option>
						<option value="Mongolia">Mongolia</option>
						<option value="Montenegro">Montenegro</option>
						<option value="Morocco">Morocco</option>
						<option value="Mozambique">Mozambique</option>
						<option value="Namibia">Namibia</option>
						<option value="Nepal">Nepal</option>
						<option value="New Zealand">New Zealand</option>
						<option value="Nicaragua">Nicaragua</option>
						<option value="Nigeria">Nigeria</option>
						<option value="Norway">Norway</option>
						<option value="Oman">Oman</option>
						<option value="Pakistan">Pakistan</option>
						<option value="Panama">Panama</option>
						<option value="Paraguay">Paraguay</option>
						<option value="Peru">Peru</option>
						<option value="Poland">Poland</option>
						<option value="Portugal">Portugal</option>
						<option value="Puerto Rico">Puerto Rico</option>
						<option value="Qatar">Qatar</option>
						<option value="Romania">Romania</option>
						<option value="Russia">Russia</option>
						<option value="Rwanda">Rwanda</option>
						<option value="Senegal">Senegal</option>
						<option value="Serbia">Serbia</option>
						<option value="Sierra Leone">Sierra Leone</option>
						<option value="Singapore">Singapore</option>
						<option value="Slovakia">Slovakia</option>
						<option value="Slovenia">Slovenia</option>
						<option value="South Africa">South Africa</option>
						<option value="Argentina">Argentina</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Argentina">Argentina</option>
						<option value="Chile">Chile</option>
						<option value="Spain">Spain</option>
						<option value="Sri Lanka">Sri Lanka</option>
						<option value="Sweden">Sweden</option>
						<option value="Switzerland">Switzerland</option>
						<option value="Taiwan">Taiwan</option>
						<option value="Tajikistan">Tajikistan</option>
						<option value="Tanzania">Tanzania</option>
						<option value="Thailand">Thailand</option>
						<option value="Netherlands">Netherlands</option>
						<option value="Philippines">Philippines</option>
						<option value="Togo">Togo</option>
						<option value="Tunisia">Tunisia</option>
						<option value="Turkey">Turkey</option>
						<option value="Uganda">Uganda</option>
						<option value="Ukraine">Ukraine</option>
						<option value="U.A.E.">U.A.E.</option>
						<option value="United Kingdom">United Kingdom</option>
						<option value="United States">United States</option>
						<option value="Uruguay">Uruguay</option>
						<option value="Venezuela">Venezuela</option>
						<option value="Vietnam">Vietnam</option>
						<option value="Zambia">Zambia</option>
						<option value="Zimbabwe">Zimbabwe</option>
					</select></p>
					<p>Email (EP): </p>
					<p><input type="text" name="epmail" /></p>
					<p>Email (Manager): </p>
					<p><input type="text" name="manmail" /></p><br>
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
		<script type="text/javascript">
				$(document).ready(function() {
					$('#datepk').datetimepicker({
						step:15
					});
				});
		</script>
		<!---//End-subfooter---->
		<!----//End-wrap---->
	</body>
</html>