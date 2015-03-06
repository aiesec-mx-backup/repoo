<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Aplicacion Enviada 2015</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="logo/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12">
            <div class="col-md-12"> 
                <img id="logo"  name="logo" src="./logo/logoconalY.png" class="img-responsive" alt="Responsive image">
            </div>
            <div class="jumbotron" id="first">
                <h1 id="registro">
                    Aplicación Enviada
                </h1>
                <p id="h" style="text-align: center;">
                    Tu aplicación fue <b style="color:#02f4c1;">ENVIADA CON ÉXITO.</b> Te hemos enviado un correo con la información de tu registro. No olvides buscar en tu carpeta de <b style="color:#02f4c1;">SPAM.</b> Este correo te será útil cuando el sistema CONAL esté listo. Es importante que estés atento a las actualizaciones en el <a href="https://www.facebook.com/groups/1424263171122321/?fref=ts" style="color:#FFFF00;" target="_new"> grupo de facebook </a>ya que será el medio donde daremos a conocer las fechas e instrucciones. <br />¡Nos vemos en CONAL!
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
session_start();
session_unset();
session_destroy();