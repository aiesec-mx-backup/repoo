<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>STATUS</title>
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
                <h1 id="registro" style="color:#02f4c1;">
                    Atención :D 
                </h1>
                <p id="h" class="text-center">
                    <?php
                        if($_GET["msj"]==1)
                        {
                            echo "<br> El servidor está algo saturado, espera un momento y vuelve a intentarlo.";
                        }
                        if($_GET["msj"]==2)
                        {
                            echo " <br> emmm esto es embarazoso, la base de datos está muy ocupada, no te preocupes vueve a intentar en un rato :D";
                        }
                        if($_GET["msj"]==3)
                        {
                            echo " <br> Ya estás registrado, pero parece que tuviste problemas con la contraseña. ¿A caso la olvidaste? </br> Si es así, envía un correo a raul.armendariz@aiesec.net Sé más cuidadoso :) ";
                        }
                        if($_GET["msj"]==4)
                        {
                            echo " <br> Hey! parece que no estás registrado. Puedes ir a la página de registro en los enlaces de abajo. Nos vemos en CONAL ;)";
                        }
                    ?>
                </p>
                <div class="col-md-6 col-md-offset-3" style="text-align: center;">
                    <button type="button"  class="btn btn-default"><a href="http://conal.aiesec.org.mx/">Página principal</a></button> 
                    <button type="button"  class="btn btn-default"><a href="index.php">Registro</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>