
<!DOCTYPE html>
<html>

<head>
    <title>AIESEC Alumni M&eacute;xico</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/aiesec.css" rel="stylesheet" media="screen">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<?php
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	include("ConectaBD.php");
?> 

<body>
	<div class="container">
    	<div class="row">
            <header class="col-lg-12 col-md-12">
                <img src="img/logo.png" class="pull-left" />
                <img src="img/logo_aam.jpg" class="pull-right" />
            </header>
        </div>
        <div class="row">
        	<div class="login-form col-lg-6 col-lg-offset-3">
                <form action="validaLogin.php" method="POST">
                    <div class="control-group">
                    	<i class="glyphicon glyphicon-user azul-ai"></i>
                    	<input type="text" class="form-control" placeholder="email" name="email">
                    </div>
                    <div class="control-group">
                    	<i class="glyphicon glyphicon-lock azul-ai"></i>
                        <input type="password" class="form-control" placeholder="contrase&ntilde;a" name="password" />
                    </div>
                    <p id="error-login"></p>
                    <button class="btn btn-primary btn-large btn-block" id="btn-entrar" href="#">Entrar</button>
                </form>
                <p>Si aún no te has registrado <a class="login-link" href="registro.php" id="hola">has click aquí.</a></p>
            </div>
        </div><!-- ROW -->
    </div> <!-- end container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aiesec.js"></script>
    <script src="js/jquery.form-validator.min.js"></script>
</body>
</html>
<?php include("DesconectaBD.php"); ?>