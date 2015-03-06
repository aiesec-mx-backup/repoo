<html>

<head>
	<style type="text/css">

.upload{

background:#e7e7e7;

box-shadow:0px 0px 10px black;

width:500px;

height:200px;

margin-right:auto;

margin-left:auto;

border-radius:20px;



}

form{

        margin: 126px auto 0;

        width: 225px;

    }

    label{

        display: block;

    }

    input[type="file"]{

        display: block;

        margin: 8px 0;

    }

    div.resultado{

        margin: 25px auto 0;

        width: 225px;

    }

    div.resultado img{

        border: 2px solid #EEEEEE;

        height: auto;

        width: 225px;

    }

</style>

</head>

<body>


<div class="upload">

<form action="" method="post" enctype="multipart/form-data">

    <label for="file">Sube un archivo:</label>

    <input type="file" name="archivo" id="archivo" /> <br>

    <input type="submit" name="boton" value="Subir" />

</form>

<div>

<div class="resultado">

<?php

if(isset($_POST['boton'])){

    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB

    if ((($_FILES["archivo"]["type"] == "image/gif") ||

    ($_FILES["archivo"]["type"] == "image/jpeg") ||

    ($_FILES["archivo"]["type"] == "image/pjpeg")) &&

    ($_FILES["archivo"]["size"] < 20000)) {

  
  if ($_FILES["archivo"]["error"] > 0) {

        echo $_FILES["archivo"]["error"] . "";

      } else {


      		
      		if (file_exists("archivos/" . $_FILES["archivo"]["name"])) {

          	echo $_FILES["archivo"]["name"] . " ya existe. ";

        	} else {



           move_uploaded_file($_FILES["archivo"]["tmp_name"],

          "archivos/" . $_FILES["archivo"]["name"]);

          echo "Archivo Subido ";

          echo "<img src="archivos/".$_FILES["archivos"]["name"]."">";

        }

      }

    } else {

    	echo "Archivo no permitido";

    }

}

?>









<-- Aqui ira el codigo PHP -->

</div>

</body>

</html>
