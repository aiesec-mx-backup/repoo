<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>¿Mi aplicación se envió correctamente? D:</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <?php
        session_start();
        if (isset($_SESSION["idUsuario"])) {
            session_unset();
            session_destroy();
        }
        ?>

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
                        <h1 id="registro"  align="center">
                            ¿MI APLICACIÓN SE ENVIÓ CORRECTAMENTE? D:
                        </h1>
                        <p id="h">
                            <br>
                            Antes que nada, buen día. Este link se hizo debido a los inconvenientes que han surgido con el envío de la aplicación <b style="color:#02f4c1;">CONAL 2015</b>. Decidimos crear este enlace para que puedas revisar si es que tu registro se envió correctamente. 
                            </br>
                            Instrucciones:
                            <br>
                            <b style="color:#02f4c1;">1.-</b>Ingresa tu correo y contraseña con las que te <b style="color:#02f4c1;">registraste</b>.
                            <br>
                            <b style="color:#02f4c1;">2.-</b> Una vez que ingresas tus datos, el sistema buscará en tu registro y te enviará al formulario que debes llenar si es que hubo un problema en tu registro. 
                            <br>
                            <b style="color:#02f4c1;">NOTA.-</b> Si tu aplicación fue enviada con éxito el sistema te lo dirá, así que no te preocupes y comprueba el estado de tu aplicación. Nos vemos en <b style="color:#02f4c1;">CONAL 2015! ;)</b>
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <form method="post" action="./SQL_perra/funcion2.php" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="EmaiL"><b style="color:#02f4c1;">Tu correo (Con el que te registraste)</b></label>
                            <input type="email" maxlength="70" name="EmaiL" placeholder="ejemplo@aiesec.net" required class="form-control" id="EmaiL">
                        </div>
                        <div class="form-group">
                            <label for="PasS"><b style="color:#02f4c1;">Contraseña</b></label>
                            <input name="PasS" type="password" maxlength="25" required class="form-control" id="PasS">
                        </div>
                        <input type="hidden" name="revisar">
                        <button type="submit" class="btn btn-primary">Comprobar</button>
                        <!-- 
                        <div class="form-group">
                            <label for="exampleInputFile">Fotografía</label>
                            <input class="btn btn-default " type="file" id="imagen" name="imagen" required />
                            <div class="pull-left" id="info">Imagen de preferencia cuadrada, máximo 1MB, formatos permitidos: jpeg, jpg, png y gif</div><br>
                        </div>
                        <input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> -->
                    </form>
                    <div class="jumbotron" id="first">	
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>