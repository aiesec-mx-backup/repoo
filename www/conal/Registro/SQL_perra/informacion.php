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
                        error_reporting(E_ALL);
                        session_start();
                        if (!isset($_SESSION["seg"]))
                        {
                            $_SESSION["seg"]=1;
                        }
                        if (!isset($_SESSION['idUsuario']))
                        {
                         ?>   
                            <div class="jumbotron" id="first">
                                <h1 id="registro">
                                    Error! D:
                                </h1>
                                <p id="h" style="text-align: center;">
                                    Si ves este error es porque algo en tu registro salió mal, quizá por alguna razón quedó interrumpido.</br>
                                    Si no te has registrado o has tenido algún problema. <a href="index.php">Da Click Aquí</a>
                                </p>
                            </div>
                         <?php   
                        }
                        else
                        {
                        ?>
                    <div class="jumbotron" id="first">
                        <h1 id="registro">
                            INFORMACIÓN DEL DELEGADO (1 de 2)
                        </h1>
                        <p id="h" style="text-align: center;">
                            ¡Tu cuenta está creada! ahora necesitamos que respondas las siguientes preguntas.
                        </p>
                    </div>
                </div>
            <div class="col-md-6 col-md-offset-3">
                <form method="post" action="./check.php" enctype="multipart/form-data" >
                    <div class="form-group">
                      <label class="control-label" for="nombre"><b style="color:#02f4c1;">Nombre</b></label>
                      <input maxlength="30" name="nombre" class="form-control" id="nombre" required placeholder="Sólo tu/tus nombres"
                      type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="apellidos"><b style="color:#02f4c1;">Apellidos</b></label>
                      <input maxlength="60" name="apellidos" class="form-control" id="apellidos" required
                      placeholder="Apellidos" type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="nick"><b style="color:#02f4c1;">¿Cómo te gusta que te llamen (Nickname)?</b></label>
                      <input maxlength="25" name="nick" class="form-control" id="nick" required
                      placeholder="Nickname" type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="round"><b style="color:#02f4c1;">Ronda de aplicación</b></label>
                     <select class="form-control" name="round" id="round" required>
                      <option value="2">Ronda 2</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="lc"><b style="color:#02f4c1;">¿A cuál comité Local perteneces?</b></label>
                      <select class="form-control" id="lc" name="lc" required>
                        <?php
                        include ("./SQL_perra/conexion.php");
                        conexion();
                        $sql = "SELECT * FROM lc";
                        $consulta = mysql_query($sql);
                        while($row=mysql_fetch_array($consulta)) 
                        {
                            echo '<option value="'.$row["idLC"].'">'.$row["nombre"].'</option>';
                        }
                        mysql_close();
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="sexo"><b style="color:#02f4c1;">Sexo</b></label>
                      <select class="form-control" id="sexo" name="sexo" required>
                      <option value="Hombre">Hombre</option>
                      <option value="Mujer">Mujer</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="telefono"><b style="color:#02f4c1;">Teléfono</b></label>
                      <input maxlength="13" required class="form-control" name="telefono" id="telefono"
                      placeholder="+52 000 000 0000" type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="uni"><b style="color:#02f4c1;">Universidad</b></label>
                      <input maxlength="100" name="uni" class="form-control" id="uni" required placeholder="Sin Abreviaturas"
                      type="text">
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="sem"><b style="color:#02f4c1;">Semestre</b></label>
                      <select class="form-control" id="sem" name="sem" required>
                      <option value="1">1° Semestre</option>
                      <option value="2">2° Semestre</option>
                      <option value="3">3° Semestre</option>
                      <option value="4">4° Semestre</option>
                      <option value="5">5° Semestre</option>
                      <option value="6">6° Semestre</option>
                      <option value="7">7° Semestre</option>
                      <option value="8">8° Semestre</option>
                      <option value="9">9° Semestre</option>
                      <option value="10">10° Semestre</option>
                      <option value="11">Graduado</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="carrera"><b style="color:#02f4c1;">¿Qué estudias?</b></label>
                      <select class="form-control" id="carrera" name="carrera" required>
                      <option value="Ciencias Políticas/ Relaciones Internacionales">Ciencias Políticas/ Relaciones Internacionales</option>
                      <option value="Comercio Internacional">Comercio Internacional</option>
                      <option value="Administración">Administración</option>
                      <option value="Economía">Economía</option>
                      <option value="Finanzas">Finanzas</option>
                      <option value="Ingeniería (Relacionado con Mecánica)">Ingeniería (Relacionado con Mecánica)</option>
                      <option value="Ingeniería (Relacionado con Computación)">Ingeniería (Relacionado con Computación)</option>
                      <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                      <option value="Mercadotecnia">Mercadotecnia</option>
                      <option value="Ciencias">Ciencias</option>
                      <option value="Otros">Otros</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="e_a"><b style="color:#02f4c1;">Cuándo te uniste a AIESEC</b></label>
                      <select class="form-control" name="e_a" id="e_a" required>
                      <option value="2011 o Antes">2011 o Antes</option>
                      <option value="2012 - Enero a Junio">2012 - Enero a Junio</option>
                      <option value="2012 - Julio a Diciembre">2012 - Julio a Diciembre</option>
                      <option value="2013 - Enero a Junio">2013 - Enero a Junio</option>
                      <option value="2013 - Julio a Diciembre">2013 - Julio a Diciembre</option>
                      <option value="2014 - Enero a Junio">2014 - Enero a Junio</option>
                      <option value="2014 - Julio a Diciembre">2014 - Julio a Diciembre</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="c_a"><b style="color:#02f4c1;">¿A cuáles conferencias has asistido?</b></label><br>
                      <input type="checkbox" name="c12" value="CONAL 2012 - ITAM"> CONAL 2012 - ITAM<br>
                      <input type="checkbox" name="rnd2012" value="RND 2012 - Guanajuato"> RND 2012 - Guanajuato<br>
                      <input type="checkbox" name="e12" value="Everest 2012 - UP"> Everest 2012 - UP<br>
                      <input type="checkbox" name="ap12" value="Apollo 2012 - Culiacán"> Apollo 2012 - Culiacán<br>
                      <input type="checkbox" name="c13" value="CONAL 2013 - Santa Fe">CONAL 2013 - Santa Fe<br>
                      <input type="checkbox" name="at13" value="Atlantis 2013 - Guadalajara"> Atlantis 2013 - Guadalajara<br>
                      <input type="checkbox" name="e13" value="Everest 2013 - León"> Everest 2013 - León <br>
                      <input type="checkbox" name="ap13" value="Apolo 2013 - Aguascalientes"> Apolo 2013 - Aguascalientes <br>
                      <input type="checkbox" name="c14" value="CONAL 2014 - Puebla"> CONAL 2014 - Puebla <br>
                      <input type="checkbox" name="at14" value="Atlantis 2014 - Guanajuato "> Atlantis 2014 - Guanajuato<br>
                      <input type="checkbox" name="e14" value="Everest 2014 - Santa Fe"> Everest 2014 - Santa Fe<br>
                      <input type="checkbox" name="ap14" value="Apollo 2014 - ITAM"> Apollo 2014 - ITAM<br>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="area"><b style="color:#02f4c1;">¿A qué area perteneces?</b></label>
                      <select class="form-control" name="area" id="area" required>
                      <option value="LCP">LCP</option>
                      <option value="oGIP">oGIP</option>
                      <option value="oGCDP">oGCDP</option>
                      <option value="iGIP">iGIP</option>
                      <option value="Account Delivery">Account Delivery</option>
                      <option value="iGCDP">iGCDP</option>
                      <option value="Finance">Finance</option>
                      <option value="Alumni">Alumni</option>
                      <option value="Marketing">Marketing</option>
                      <option value="TM">TM</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="arol"><b style="color:#02f4c1;">¿Cuál es tu rol actual?</b></label>
                      <select class="form-control" name="arol" id="arol" required>
                      <option value="LCP">LCP</option>
                      <option value="LCVP">LCVP</option>
                      <option value="MCB">MCB</option>
                      <option value="MC">MC</option>
                      <option value="NST">NST</option>
                      <option value="TL">Team Leader</option>
                      <option value="TMP">Team Member Program</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="veg"><b style="color:#02f4c1;">¿Eres Vegatariano?</b></label>
                      <select class="form-control" id="veg" name="veg" required>
                      <option value="1">SÍ</option>
                      <option value="0">NO</option>
                    </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="restriccion"><b style="color:#02f4c1;">¿Tienes alguna restricción alimenticia o condición médica que debamos tomar en cuenta?</b></label>
                      <textarea style="resize:none;" maxlength="80" class="form-control" id="restriccion" placeholder="Sí/No y qué debemos tener en cuenta" name="restriccion" required rows="3"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="control-label" for="emergencia"><b style="color:#02f4c1;">En caso de emergencia. ¿A quién debemos contactar?</b></label>
                      <textarea style="resize:none;" required maxlength="200" class="form-control" name="emergencia" placeholder="Escribe su nombre, tu parentesco con él/ella y su número de teléfono" rows="3"></textarea>
                    </div>
                    <?php
                    if($_SESSION["seg"]==1)
                    {
                        ?>
                        <a id="modal-659530" href="#modal-container-659530" role="button" class="btn btn-default" data-toggle="modal">Siguiente</a>
                        <?php
                    }?>              
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
                                            <button type="submit" class="btn btn-primary">Continuar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>
                <div class="jumbotron" id="first">
                </div>
            </div>
	</div>
</div>
    <?php
                        }
     ?>
</body>
</html>