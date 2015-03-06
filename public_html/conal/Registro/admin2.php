<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		session_start();
		include ('funciones.php');
		fav();
		if($_SESSION['id']=="")
	{
		reddi();
	}
	else
	{
	?>
    <title>Producto</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
	<script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
    <script src="js/NewsGoth_Lt_BT_italic_400.font.js" type="text/javascript"></script>
    <script src="js/Vegur_400.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>
</head>
<body id="page4">
	<div class="extra">
    <!--==============================header=================================-->
        <header>
        	<div class="row-top">
            	<div class="main">
                	<div class="wrapper">
                    	<h1><a href="index.php">Metal Mecánico</a></h1>
                    </div>
                </div>
            </div>
           <?php
				menu("productos");
			?>
            <div class="row-bot">
            	<div class="center-shadow">
                </div>
            </div>
        </header>
        
        <!--==============================content================================-->
        <section id="content"><div class="ic">Metal Mecánico</div>
            <div class="content-bg">
                <div class="main">
                    <div class="container_12">
                        <div class="wrapper">
                            <article class="grid_12">
                            <?php
								if ($_POST['subirBtn']) 
								{
									include_once("class_imgUpldr.php"); 
									$subir = new imgUpldr;
									$subir->init($_FILES['imagen']);
									foto();
								}
								$numero=$_GET['id'];
								if (numero($numero)<=3)
								{
									echo
									'
										<form id="subirImg" name="subirImg" enctype="multipart/form-data" method="post" action="">
										  <label for="imagen">Subir imagen:</label>
										  <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
										  <input type="file" name="imagen" id="imagen" />
										  <input type="submit" name="subirBtn" id="subirBtn" value="Subir imagen" />
										</form>
										<br>
										<br>
									';
								}
								echo '<h4><a href="producto.php?id='.$numero.'">Ver Página del Producto</a></h4><br>';
								tablaimagen($numero);
                            ?>
                            </article>
                        </div>
                    </div>
                </div>
                </div>
                <div class="block"></div>
            </div>
        </section>
    </div>
	
	<!--==============================footer=================================-->
    <?php
		foot();
	?>
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
<?php
	}
	?>