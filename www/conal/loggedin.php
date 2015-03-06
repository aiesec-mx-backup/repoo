<?php
header("Content-Type: text/html;charset=utf-8");
session_start();

	if ($_SESSION['email']==NULL){
	$_SESSION['email']=$_POST['email'];
	$_SESSION['x']=$_GET['idUsuario'];
	}
$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);
mysql_set_charset('utf8', $con);
	$email=$_POST["email"];
	$password=$_POST["password"];
	$query="SELECT * FROM usuario WHERE correo='$email' AND Pass='$password' AND permisos='2'
	OR correo='$email' AND Pass='$password' AND permisos='3'";
	$result=mysql_query($query,$con)or die (mysql_error());
	$resultado= mysql_fetch_row($result);
	if(!$resultado){
	echo'<script type="text/javascript">
                alert("Usuario o Contraseña Incorrecta");
                window.location="login.php"
                </script>';
	session_destroy();
	}
		if(($_SESSION['email']==NULL && $_GET['x']==NULL)){
	echo'<script type="text/javascript">
                alert("Sesión expiró :( ");
                window.location="login.php"
                </script>';
	}
	else{
	$idUsuarioI=$_GET['x'];
	$quer=mysql_query("SELECT * FROM usuario WHERE idUsuario='$idUsuarioI'", $con)or die(mysql_error());
	$resy= mysql_fetch_row($quer);
	$_SESSION['email']=$resy['1'];
	}
	$_SESSION['email']=$email;
	$que="SELECT * FROM usuario WHERE correo='$email'";
	$resu=mysql_query($que,$con)or die (mysql_error());
	$resulta= mysql_fetch_row($resu);
    $idUsuario=$resulta['0'];
	$qu=mysql_query("SELECT * FROM inf_us WHERE idUsuario='$idUsuario'", $con)or die(mysql_error());
	$resultadoUsuario= mysql_fetch_row($qu);
	$nickname=$resultadoUsuario['13'];
	$nombre = $resultadoUsuario['1'];
	$apellido = $resultadoUsuario['2'];
	$telefono = $resultadoUsuario['5'];
	$comite = $resultadoUsuario['6'];
	$area = $resultadoUsuario['11'];
	$rol = $resultadoUsuario['12'];
	$alimentacion = $resultadoUsuario['14'];
	$restricciones = $resultadoUsuario['15'];
	$emergencia = $resultadoUsuario['16'];
	$playera = $resultadoUsuario['18'];
	$fiesta = $resultadoUsuario['19'];
	$foto = $resulta['3'];
	$ronda=$resultadoUsuario['4'];
	$quLC=mysql_query("SELECT * FROM lc WHERE idLC='$comite'", $con)or die(mysql_error());
	$resultadoLC= mysql_fetch_row($quLC);
	$LC=$resultadoLC['1'];
	?>
<html>
	<head>
		<title>CONAL 2015</title>
		<meta charset="UTF-8" />
		<meta content="width=device-width, initial-scale = 1.0, user-scalable = no" name="viewport" />
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="shortcut icon" href="images/Favicon.png">
	</head>
	<body>

		<section id="main" class="containers">
			<div class="logo">
				<img src="images/conal.png" alt="" />
			</div>

			<div class="socialArea book">
				<span class="yellow"><i class="fa fa-user fa-2x"></i><a href="index.php">Cerrar Sesión</a></span>
				<br/>
				<br/>
				<div class="socialCircle"><a href="https://www.facebook.com/groups/1424263171122321/"><i class="fa fa-facebook fa-2x fb"></i></a></div>
			</div>
			<br/>
			
			<div style="clear: both;"></div>

			<div class="menuLeft">
				<ul class="black white">
					<li class="menuScroll" data-page="evento">
						PERFIL
						<hr/>
					</li>
					<li class="menuScroll" data-page="fechas">
						FEES
						<hr/>
					</li>
					<li class="menuScroll" data-page="sedes">
						AGENDA
						<hr/>
					</li>
				</ul>
				<div style="clear: both;"></div>
			</div>

			<div class="white mainText">
				<img src="images/bienvenido.png" alt="" /><BR><BR>
               <h1 class="black yellow"><BIG><BIG><BIG><BIG><BIG><BIG>
               <?php echo $nickname;?></BIG></BIG></BIG></BIG></BIG></BIG></h1>
			</div>
            

			<div class="center black yellow">
				
				<br/>
				
			</div>

			<div class="imgAiesec">
				<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><img src="images/logoaiesec.png" alt="" />
			</div>
		</section>

		<section id="evento" class="containers">
			<div class="headerContainers bgyellow black blue">
				PERFIL
				<img src="images/tra.png" alt="" />
			</div>

			<div class="menuLeft">
				<ul class="black white">
					<li class="yellow menuScroll" data-page="evento">
						PERFIL
						<hr/>
					</li>
					<li class="menuScroll" data-page="fechas">
						FEES
						<hr/>
					</li>
					<li class="menuScroll" data-page="sedes">
						AGENDA
						<hr/>
					</li>
				</ul>
			</div>

			<div id="MainTextEvento" class="book center">
				<div class="black yellow"><big><big>TUS DATOS</big></big></div>
                
				<br/>
				<div class="white" align="left">
					<span class="yellow">Nombre: </span>
                    <?php echo $nombre." ".$apellido;?> <br/>
                    <span class="yellow">Nickname: </span>
                    <?php echo $nickname; ?> <br/>
                    <span class="yellow">Comité: </span>
                    <?php echo $LC; ?> <br/>
                    <span class="yellow">Área: </span>
                    <?php echo $area; ?> <br/>
                    <span class="yellow">Rol: </span>
                    <?php echo $rol; ?> <br/>
                    <span class="yellow">Teléfono: </span>
                    <?php echo $telefono; ?> <br/>
                    <span class="yellow">Restricciones: </span>
                    <?php echo $restricciones; ?> <br/>
                    <span class="yellow">Contacto de emergencia: </span>
                    <?php echo $emergencia; ?> <br/>
                    <span class="yellow">Vegetariano: </span>
                    <?php if ($alimentacion==1) echo "Si"; else echo "No"; ?> <br/>
                    <span class="yellow">Playera: </span>
                    <?php if ($playera==1) {echo "Si"; }
					if ($playera==NULL || $player==' ') {echo " ";} 
					if ($playera==0){ echo "No"; }
					?> <br/>
                    <span class="yellow">Fiesta: </span>
                    <?php if ($fiesta==1) {echo "Si";} if ($fiesta==NULL || $fiesta==' ' ) {echo " ";} if ($fiesta==0) {echo "No";} ?> <br/>
                    <br>Puedes editar tu información personal así como elementos adicionales que quieras compartir en la sección de restriciones.
                    No toda la información puede ser cambiada :)
                    
				</div>
				<div style="clear: both;"></div>
				<a href="editar1.php?xf=<?php echo $idUsuario; ?>&fr=345345" class="btnConal1">EDITAR INFORMACIÓN</a>
			</div>
			<div id="fotoP">
				<?php  
				if ($foto==NULL) {
				echo "<img src='images/noFoto.png' width='215px' height='215px' />"; 
				}
                else{
				if (strpos($foto,'http') !== false)
				echo "<img src='$foto' width='215px' height='215px' />";
				else
				echo "<img src='".$foto."' width='215px' height='215px' />"; 
                }
				?>
			</div>
			<div id="imgC">
				<img src="images/conalC.png" alt="" />
			</div>
		</section>

		<section id="fechas"  class="containers">
			<div class="headerContainers bgpink black white">
				FEES
				<img src="images/trm.png" alt="" />
			</div>
			<div class="menuLeft">
				<ul class="black white">
					<li class="menuScroll" data-page="evento">
						PERFIL
						<hr/>
					</li>
					<li class="menuScroll pink" data-page="fechas">
						FEES
						<hr/>
					</li>
					<li class="menuScroll" data-page="sedes">
						AGENDA
						<hr/>
					</li>
				</ul>
			</div>

			<div style="clear:both;"></div>
			<div id="txtFechas">
            <?php 
			if ($ronda==1){
				echo '
				<small><small><span class="black">Lunes 24 de Noviembre /</span><span class="book">$1,750.00 MN. </span>
				<hr/></small></small>
				<div style="clear:both;"></div>
				<small><small><span class="black">Jueves 11 de Diciembre / </span><span class="book">Primer pago $875.</span>
				<hr/></small></small>
				<div style="clear:both;"></div>
				<small><small>
                <span class="black">Jueves 18 de Diciembre / </span><span class="book">Segundo Pago $875.</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
                <span class="black">Miercoles 31 de Diciembre / </span><span class="book">Cancelación $600</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
                <span class="black">Domingo 4 de Enero / </span><span class="book">Cambio nombre $300.</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
				<span class="black">Lunes 5 de enero / </span><span class="book">Multas, fiesta y playeras.</span>
				<hr/></small></small>
			</div>';
			}else{
			echo
			'<small><small><span class="black">Lunes 24 de Noviembre /</span><span class="book">$1,950.00 MN. </span>
				<hr/></small></small>
				<div style="clear:both;"></div>
				<small><small><span class="black">Jueves 11 de Diciembre / </span><span class="book">Primer pago $975.</span>
				<hr/></small></small>
				<div style="clear:both;"></div>
				<small><small>
                <span class="black">Jueves 18 de Diciembre / </span><span class="book">Segundo Pago $975.</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
                <span class="black">Miercoles 31 de Diciembre / </span><span class="book">Cancelación $600</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
                <span class="black">Domingo 4 de Enero / </span><span class="book">Cambio nombre $300.</span>
				<hr/></small></small>
                <div style="clear:both;"></div>
				<small><small>
				<span class="black">Lunes 5 de enero / </span><span class="book">Multas, fiesta y playeras.</span>
				<hr/></small></small>
			</div>';}
			?>
			<div style="clear:both;"></div>

			
		</section>
		<section id="sedes" class="containers">
			<div class="headerContainers bgblue black white left">
				AGENDA
				<img src="images/trb.png" alt="" />
			</div>
			<!--<div class="black right white txtSedes">
				<h2> Aguascalie&nbsp;,</h2>
    				<h2> Ags.&nbsp;</h2>-->

			</div>
			<div class="black right txtSedes blue">
				<h1 class="hidden">/</h1>
			</div>
			<div style="clear:both;"></div>
			<div class="menuLeft">
				<ul class="black white">
					<li class="menuScroll" data-page="evento">
						PERFIL
						<hr/>
					</li>
					<li class="menuScroll" data-page="fechas">
						FEES
						<hr/>
					</li>
					<li class="menuScroll blue" data-page="sedes">
						AGENDA
						<hr/>
					</li>
				</ul>
			</div>

			<div id="FormSedes">
			
            	
             </div>
			<div style="clear:both;"></div>

			<div class="lastSeccition">
				
				<br/>
				<img src="images/conalh.png" alt="" class="left" />
			</div>
			
			<div style="clear:both;"></div>

		</section>
		<footer class="bgblue">
			<div style="position: absolute;"><i style="margin-right: -20px;" class="fa fa-facebook-square fa-2x"></i><i class="fa fa-twitter fa-2x"></i></div>
			<h2 class="book">AIESEC Aguascalientes </h2>
		</footer>
	</body>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="js/coutnDawn.js"></script>
		<script type="text/javascript" src="js/code.js"></script>
</html>