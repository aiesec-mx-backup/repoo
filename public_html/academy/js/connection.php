<?php

$connection = mysqli_connect("dbAiesecAcademy.db.12058720.hostedresource.com","dbAiesecAcademy","Academy@9","dbAiesecAcademy");
//$connection = mysqli_connect("localhost","root","","aa");

if (mysqli_connect_errno($connection)) {
	echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
} else {
	//echo "exito";
}

?>