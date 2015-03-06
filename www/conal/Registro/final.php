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
                    <?php
                        session_start();
                        $_SESSION["seg"]=$_SESSION["seg"]."2";
                        if (!isset($_SESSION['idUsuario']))
                        {
                         ?>   
                            <div class="jumbotron" id="first">
                                <h1 id="registro">
                                    Error! D:
                                </h1>
                                <p id="h" style="text-align: center;">
                                    Si ves este error es porque algo en tu registro salió mal, quizá por alguna razón quedó interrumpido.</br>
                                    Si no te has registrado. <a href="index.php">Da Click Aquí</a>
                                </p>
                            </div>
                         <?php   
                        }
                        else
                        {
                        ?>
                    <div class="jumbotron" id="first">
                        <h1 id="registro">
                            INFORMACIÓN DEL DELEGADO (2 de 2)
                        </h1>
                        <p id="h" style="text-align: center;">
                            Información registrada, para finalizar tu aplicación, responde estas preguntas.
                        </p>
                    </div>
                </div>
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="./insert3.php" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label class="control-label" for="uno"><b style="color:#02f4c1;">¿Qué es CONAL?</b></label>
                      <textarea style="resize:none;" maxlength="245" class="form-control" id="uno" name="uno" required rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="dos"><b style="color:#02f4c1;">¿Cuáles serían los beneficios para tu LC si fueras elegido como delegado para CONAL 2015?</b></label>
                      <textarea style="resize:none;" required maxlength="245" class="form-control" name="dos" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="tres"><b style="color:#02f4c1;">¿Para ti. ¿Qué significa AIESEC?</b></label>
                      <textarea style="resize:none;" required maxlength="245" class="form-control" name="tres" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="cuatro"><b style="color:#02f4c1;">¿De qué manera te asegurarías de que la información que adquieras en CONAL 2015 sea distribuída entre los miembros que no pudieran asistir?</b></label>
                      <textarea style="resize:none;" required maxlength="245" class="form-control" name="cuatro" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="cinco"><b style="color:#02f4c1;">¿Cuál es tu siguiente paso dentro de AIESEC?</b></label>
                      <textarea style="resize:none;" required maxlength="245" class="form-control" name="cinco" rows="3"></textarea>
                    </div>
                    <?php
                    if ($_SESSION["seg"]=12)
                    {?>
                       <a id="modal-659530" href="#modal-container-659530" role="button" class="btn btn-default" data-toggle="modal">Terminar</a>
                    <?php
                    }
                    ?>
                            <div class="modal fade" id="modal-container-659530" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel" style="color: black;">Revisa tu Información</h4>
                                        </div>
                                        <div style="color: black;" class="modal-body">
                                            Antes de enviar el formulario asegúrate que tus datos son correctos. ¿Deseas Continuar?  
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Revisar</button> 
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>
                <div class="jumbotron" id="first">
                </div>
            </div>
	</div>
    <?php
                        }
    ?>
</div>
</body>
</html>