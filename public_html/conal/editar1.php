<?php
	header("Content-Type: text/html;charset=utf-8");
$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);
	mysql_set_charset('utf8', $con);
	session_start();
    $idUsuario=$_GET['xf'];
	$query="SELECT * FROM usuario WHERE idUsuario='$idUsuario'";
	$result=mysql_query($query,$con)or die (mysql_error());
	$resultado= mysql_fetch_row($result);
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
	$talla = $resultadoUsuario['20'];
	$color = $resultadoUsuario['21'];
	$fiesta = $resultadoUsuario['19'];
	$foto = $resultado['3'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>CONAL 2015-Cuenta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">


	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="Registro/css/bootstrap.css" rel="stylesheet">
	<link href="Registro/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="Registro/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="Registro/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="Registro/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="Registro/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="Registro/logo/favicon.png">
<script type="text/javascript">
function mostrarReferencia(){
if (document.form.playera[1].checked == true) {
document.getElementById('desdeotro').style.display='block';
} else {
document.getElementById('desdeotro').style.display='none';
}
}
</script>
	<script type="text/javascript" src="Registro/js/jquery.min.js"></script>
	<script type="text/javascript" src="Registro/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Registro/js/scripts.js"></script>
 <script type="text/javascript">
<!--
function CargarFoto(img, ancho, alto){
  derecha=(screen.width-ancho)/2;
  arriba=(screen.height-alto)/2;
  string="toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width="+ancho+",height="+alto+",left="+derecha+",top="+arriba+"";
  fin=window.open(img,"",string);
}
// -->
</script>
</head>

<body>
<div style="margin-left:30%; margin-right:30%" >
	<div class="row clearfix">
		<div class="col-md-12">
                    <div class="col-md-12"> 
                        <img id="logo"  name="logo" src="./Registro/logo/logoconalY.png" width="60%" height="60%" class="img-responsive" alt="Responsive image">
                    </div>
				<h1 id="registro"  align="center">Editar perfil</h1>
				<p id="h">
					<form action="editar2.php" method="post"  enctype="multipart/form-data" name="form">
                            <div class="form-group">
                                     <label><b style="color:#02f4c1;">Teléfono: </b></label>
                                      <input maxlength="13" required class="form-control" name="telefono" id="telefono" value="<?php echo $telefono; ?>" type="text">
                  <input name="idUsuario" value="<?php echo $idUsuario; ?>" type="hidden">
                            </div>
                            <div class="form-group">
                                     <label><b style="color:#02f4c1;">Nickname: </b></label>
                                      <input maxlength="25" name="nick" class="form-control" id="nick" required type="text" value="<?php echo $nickname; ?>">
                            </div>
                            <div class="form-group">
                                     <label><b style="color:#02f4c1;">Vegetariano: </b></label>
                    <input type="radio" name="alimentacion" value="1" <?php if ($alimentacion==1) echo "checked"; ?>>
                    Si
					<input type="radio" name="alimentacion" value="0" <?php if ($alimentacion==0) echo "checked"; ?>>
                    No
                            </div>
                            <div class="form-group">
                                     <label><b style="color:#02f4c1;">Restricciones: </b></label>
                                     <textarea style="resize:none;" class="form-control"  maxlength="80" name="restricciones" ><?php echo $restricciones; ?> </textarea>
                            </div>
                             <div class="form-group">
                                     <label><b style="color:#02f4c1;">Contacto de emergencia: </b></label>
                                     <textarea style="resize:none;" class="form-control"  maxlength="60" name="emergencia" ><?php echo $emergencia; ?> </textarea>
                            </div>
<input type="hidden" name="playera" value="<?php echo $playera;?>" >
<input type="hidden" name="talla" value="<?php echo $talla;?>" >
<input type="hidden" name="color" value="<?php echo $color;?>" >
                             
					<?php if ($fiesta!=1){ ?>
                    <div class="form-group">
                    <label><b style="color:#02f4c1;">Fiesta ($350): </b></label>
                    <input type="radio" name="fiesta" value="0">
                    No
					<input type="radio" name="fiesta" value="1">
                    Si
                            </div>
                    <?php } else { ?>
<input type="hidden" name="fiesta" value="<?php echo $fiesta;?>" >
<?php }
					if ($foto==NULL){ ?>
                              <div class='form-group'>
                            <label><b style='color:#02f4c1;'>Link de tu Foto: </b></label>
                                <input type='text' id='imagen' name='foto' />
		                      <label><b style='color:#02f4c1;'><a href="javascript:CargarFoto('images/linkfoto.JPG','665','683')">¿Cómo obtengo el link? </a></b></label>
                                </div>
					<?php } else{
					echo " <input type='hidden' id='imagen' name='foto' value='$foto' />";
					 }	?>
                    
                            <div align="center">
                           <input type="submit" class="btn btn-default" value="Aceptar" align="middle">
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          
                        </form>

		</div>
	</div>
</div>
</body>
</html>