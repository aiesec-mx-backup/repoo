<?php
	$hostname = "AlumniMexico.db.12058720.hostedresource.com";
	$username = "AlumniMexico";
	$dbname = "AlumniMexico";
	header('Content-type: text/html; charset=utf-8');
	ini_set('default_charset', 'utf-8');
	// Conectar bd
	$con=mysqli_connect($hostname,$username,"A!esec2013", $dbname);

	// Check connection 
	if (mysqli_connect_errno()){
	  echo "Ha ocurrido un error, no se pudo conectar la base de datos: " . mysqli_connect_error();
	}
?>