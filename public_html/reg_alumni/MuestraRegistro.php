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
	$email = $_GET['email'];
	$query="SELECT * FROM Usuarios U INNER JOIN Redes R ON R.email = U.email INNER JOIN Educacion E ON E.email = U.email INNER JOIN Laboral L ON L.email = U.email INNER JOIN Direccion D ON D.email = U.email INNER JOIN Aiesec A ON A.email = U.email INNER JOIN MesaDir M ON M.email = U.email INNER JOIN Participacion P ON P.email = U.email WHERE U.email = '".$email."'";
	
	$registros=mysqli_query($con, $query );
	
	$rows = array();
	while($r = mysqli_fetch_assoc($registros)){
		$rows[] = $r;
	}
	print json_encode($rows);
	//echo json_encode($rows);
?>