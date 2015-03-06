<?php

$connection = mysqli_connect("dbaiesecrecruit.db.12058720.hostedresource.com","dbaiesecrecruit","Recruitment!0","dbaiesecrecruit");
//$connection = mysqli_connect("localhost","root","","reclutamiento");

if (mysqli_connect_errno($connection)) {
	echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
} else {
	//echo "exito";
}

?>