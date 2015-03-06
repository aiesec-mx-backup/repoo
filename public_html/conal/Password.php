<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>¿Olvidaste tu Contraseña?</title>
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
                    <h1 id="registro"  align="center">RECUPERA TU PASSWORD</h1>
                    <p id="h">Si olvidaste tu contraseña, no te preocupes! sólo ingresa tu correo y te la enviaremos (No olvides revisar tu carpeta de SPAM).</p>
                    <?php
                    if(isset($_GET["msj"])) {
                        if ($_GET["msj"] == 0) {
                            echo'<div class="alert alert-dismissable alert-danger">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					Error!
				</h4> <strong>Correo no registrado</strong> El correo que ingresaste no existe en nuestra base de datos! Intenta con otro o revisa la redacción.
			</div>';
                        }
                        if ($_GET["msj"] == 5) {
                            echo'<div class="alert alert-dismissable alert-danger">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    Error!
                </h4> <strong>Correo Registrado</strong> sin embargo, tu perfil no fue aceptado :( 
            </div>';
                        }
                        if ($_GET["msj"] == 1) {
                            echo'<div class="alert alert-dismissable alert-success">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					Enviado!
				</h4> <strong>El correo se envió correctamente</strong> No olvides revisar tu carpeta de SPAM
			</div>';
                        }
                        if ($_GET["msj"] == 4) {
                            echo'<div class="alert alert-dismissable alert-success">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>
                    Enviado!
                </h4> <strong>El correo se envió correctamente</strong> No olvides revisar tu carpeta de SPAM y recuerda que no tendrás acceso al sistema hasta que tu perfil sea ACEPTADO.
            </div>';
                        }
                        if ($_GET["msj"] == 2) {
                            echo'<div class="alert alert-dismissable alert-warning">
				 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4>
					Alerta!
				</h4> <strong>Algo salió Mal! </strong> No te preocupes, intenta más tarde! :D
			</div>';
                        }
                    }
                    ?>
                    <form action="./Registro/correos/Passcorreo.php" method="post"  enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="EmaiL"><b style="color:#02f4c1;">Correo: </b></label>
                            <input type="email" maxlength="70" name="email" placeholder="ejemplo@aiesec.net" required class="form-control" id="EmaiL">
                        </div>
                        <input type="submit" class="btn btn-default" value="Enviar Contraseña">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

