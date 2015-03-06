<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>Aplicación CONAL 2015</title>
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
  
	<script type="text/javascript" src="Registro/js/jquery.min.js"></script>
	<script type="text/javascript" src="Registro/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="Registro/js/scripts.js"></script>
</head>

<body>
<div style="margin-left:30%; margin-right:30%" >
	<div class="row clearfix">
		<div class="col-md-12">
                    <div class="col-md-12"> 
                        <img id="logo"  name="logo" src="./Registro/logo/logoconalY.png" width="434" height="173" class="img-responsive" alt="Responsive image">
                    </div>
				<h1 id="registro"  align="center">LOGIN</h1>
				<p id="h">
					<form action="loggedin.php" method="post"  enctype="multipart/form-data" >
                            <div class="form-group">
                                     <label for="EmaiL"><b style="color:#02f4c1;">Correo: </b></label>
                                     <input type="email" maxlength="70" name="email" placeholder="ejemplo@aiesec.net" required class="form-control" id="EmaiL">
                            </div>
                            <div class="form-group">
                                     <label for="PasS"><b style="color:#02f4c1;">Contraseña</b></label>
                                     <input name="password" type="password" maxlength="25" required class="form-control" id="PasS">
                            </div>
                           <input type="submit" class="btn btn-default" value="Entrar">
                        </form>

		</div>
	</div>
</div>
</body>
</html>