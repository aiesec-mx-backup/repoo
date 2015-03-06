<?php
$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);

mysql_set_charset('utf8', $con);
$email=$_POST["email"];
$password=$_POST["password"];
$query="SELECT * FROM usuario WHERE correo='$email' AND Pass='$password' AND permisos='4'";
$result=mysql_query($query,$con)or die (mysql_error());
$resultado= mysql_fetch_row($result);
if(!$resultado){
						echo'<script type="text/javascript">
		                alert("Usuario o Contraseña Incorrecta");
        		        window.location="../loginCC2015.php"
                		</script>';	
					}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>CC CONAL 2015</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="../Registro/css/bootstrap.css" rel="stylesheet">
	<link href="../Registro/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Registro/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Registro/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Registro/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../Registro/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="../Registro/logo/favicon.png">
  <script>
function mostrarInfo1(cod){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","informaciona.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("opcion="+cod);
}
</script>
<script>
function mostrarInfo(cod){
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","informaciond.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("lc="+cod);
}
</script>
	<script type="text/javascript" src="../Registro/js/jquery.min.js"></script>
	<script type="text/javascript" src="../Registro/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../Registro/js/scripts.js"></script>
</head>

<body>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-12">
                    <div class="col-md-12"> 
                        <img id="logo"  name="logo" src="../Registro/logo/logoconalY.png" class="img-responsive" width="30%" height="30%" alt="Responsive image">
                    <h1 id="registro"  align="center">
					<big><b style="color:#eb0d6c">CC</b></big>
					</h1>
                    </div>
                    
			<div class="jumbotron" id="first">
				
				<p id="h">
                <center>
                <form>
                <select onchange="mostrarInfo1(this.value)">
                <option>Selecciona la opción </option>
				<option value="1">Detalle por LC </option>
                <option value="2">Totales </option>
                <option value="3">Playeras </option>
                 </select>
                    </form>
                    
                    <div id="datos" style="font-size:12px"></div>
				</p>
                </center>
                
			</div>
                </div>
                
            <div class="col-md-6 col-md-offset-3">
            
                    <div class="jumbotron" id="first">	
                    </div>
			</div>
	</div>
</div>

</body>
</html>