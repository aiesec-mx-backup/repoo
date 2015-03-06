<?php
	// Datos generales
	$email = $_POST['email'];
	$password = $_POST['password'];
	$url = "";
	
	// Inserta datos en BD
	include("ConectaBD.php");

	$sql="SELECT Email FROM Admin WHERE Email = '".$email."' AND Password = '".$password."'";
	if ($admin = mysqli_prepare($con, $sql)) {

		/* execute query */
		mysqli_stmt_execute($admin);
	
		/* store result */
		mysqli_stmt_store_result($admin);
	
		if(mysqli_stmt_num_rows($admin) > 0) {
			mysqli_stmt_close($admin);
			$url = "buscador.php";
			session_start();
			$_SESSION['email']  = $email;
		} else {
			mysqli_stmt_close($admin);
			$url = "admin.php";	
		}
		
		
	}
	
	include("DesconectaBD.php"); 
	header( 'Location:'.$url );	
?>