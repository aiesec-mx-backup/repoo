<?php
	// Datos generales
	$email = $_POST['email'];
	$password = $_POST['password'];
	$url = "";
	
	// Inserta datos en BD
	include("ConectaBD.php");

	$sql="SELECT email FROM Usuarios WHERE email = '".$email."' AND password = '".$password."'";
	
	if ($sectores = mysqli_prepare($con, $sql)) {

		/* execute query */
		mysqli_stmt_execute($sectores);
	
		/* store result */
		mysqli_stmt_store_result($sectores);
	
		if(mysqli_stmt_num_rows($sectores) > 0) {
			mysqli_stmt_close($sectores);
			$url = "registro.php";
			session_start();
			$_SESSION['email']  = $email;
		} else {
			mysqli_stmt_close($sectores);
			$url = "index.php";	
		}
		
		include("DesconectaBD.php"); 
		header( 'Location:'.$url );	
		
	}
	
	
?>