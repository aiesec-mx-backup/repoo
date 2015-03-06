<?php

$connection = mysqli_connect("newdbVivaMexico.db.12058720.hostedresource.com","newdbVivaMexico","Newviva10#","newdbVivaMexico");
//$connection = mysqli_connect("localhost","root","","vm");

if (mysqli_connect_errno($connection)) {
	echo "Error al conectarse a la base de datos: " . mysqli_connect_error();
} else {
	//echo "Exito";
}

?>