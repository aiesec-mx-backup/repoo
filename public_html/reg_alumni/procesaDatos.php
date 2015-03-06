<?php
	session_start();
	// Datos generales
	$nombres = $_POST['nombres'];
	$apeP = $_POST['apeP'];
	$apeM = $_POST['apeM'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$fecNac = $_POST['ano'] . "-" . $_POST['mes'] . "-" . $_POST['dia']; 
	$genero = $_POST['genero'];
	$paisNac = $_POST['paisNac'];
	$nacionalidad = $_POST['nacionalidad'];
	$paisRes = $_POST['paisRes'];
	$ciudadRes = $_POST['ciudadRes'];
	$tel = $_POST['claIntTel']."-".$_POST['ladaTel']."-".$_POST['numTel'];
	$cel = $_POST['claIntCel']."-".$_POST['ladaCel']."-".$_POST['numCel'];
	// Redes sociales
	$skype = $_POST['skype'];
	$facebook = $_POST['facebook'];
	$linkedin = $_POST['linkedin'];
	$twitter = $_POST['twitter'];
	// Educación
	$universidad = $_POST['universidad'];
	$carrera = $_POST['carrera'];
	$titulo = $_POST['titulo'];
	$anos_car = $_POST['anos_car'];
	$maestria = 0;
	$uni_maestria = $_POST['uni_maestria'];
	$tit_maestria = $_POST['tit_maestria'];
	$doctorado = 0;
	$uni_doctorado = $_POST['uni_doctorado'];
	$tit_doctorado = $_POST['tit_doctorado'];
	// Laboral
	$empresa = $_POST['empresa'];
	$sector = $_POST['sector'];
	$puesto = $_POST['puesto'];
	$web = $_POST['web'];
	$email_emp = $_POST['email_emp'];
	$tel_emp = $_POST['tel_emp'];
	$ext_emp = $_POST['ext_emp'];
	$ano_ingreso = $_POST['ano_ingreso'];
	$emp1 = $_POST['emp1'];
	$emp2 = $_POST['emp2'];
	$emp3 = $_POST['emp3'];
	// Dirección laboral
	$calle = $_POST['calle'];
	$num_ext = $_POST['num_ext'];
	$num_int = $_POST['num_int'];
	$colonia = $_POST['colonia'];
	$ciudad_emp = $_POST['ciudad_emp'];
	$edo_emp = $_POST['edo_emp'];
	$pais_emp = $_POST['pais_emp'];
	$cp_emp = $_POST['cp_emp'];
	// AIESEC
	$ano_ai = $_POST['ano_ai'];
	$pais_ai = $_POST['pais_ai'];
	$comite = $_POST['comite'];
	$ult_ano = $_POST['ult_ano'];
	$ult_puesto = $_POST['ult_puesto'];
	$mesa_dir = $_POST['mesa_dir'];
	// Mesa directiva
	$periodo_ini = $_POST['periodo_ini'];
	$periodo_fin = $_POST['periodo_fin'];
	$posicion_mesa = $_POST['posicion_mesa'];
	$presidente = $_POST['presidente'];
	$inter_ent = $_POST['int_ent'];
	$inter_sal = $_POST['int_sal'];
	$mkt_com = $_POST['mkt_com'];
	$finanzas = $_POST['finanzas'];
	$rh = $_POST['rh'];
	$otra = $_POST['otra'];
	// Participación
	$tip_participacion = $_POST['tipo_participacion'];
	$mex = 0;
	$ibero = 0;
	$internacional = 0;
	// Área participación
	$congresos = $_POST['congresos'];
	$alumnite = $_POST['alumnite'];
	$isum = $_POST['isum'];
	$agroups = $_POST['agroups'];
	$webinars = $_POST['webinars'];
	$consejo = $_POST['consejo'];
	$patrocinador = $_POST['patrocinador'];
	$mentoring = $_POST['mentoring'];
	$cursos = $_POST['cursos'];
	$apoyo = $_POST['apoyo'];
	$economia = $_POST['economia'];
	$otra_forma = $_POST['otra_forma'];
	
	// Inserta datos en BD
	include("ConectaBD.php");

	// usuario nuevo o existente?
	$query="SELECT email FROM Usuarios WHERE email = '".$email."'";
	$user=mysqli_query($con, $query );
	$existente = false;
	if($data = mysqli_fetch_array($user))
		$existente = true;

	if(!$existente){
		$sqlUsuario = "INSERT INTO Usuarios VALUES ('".$email."', '".$nombres."', '".$apeP."', '".$apeM."', '".$password."', '".$fecNac."', '".$genero."', '".$paisNac."', '".$nacionalidad."', '".$paisRes."', '".$ciudadRes."', '".$tel."', '".$cel."')";
		if (!mysqli_query($con,$sqlUsuario)){
			die('Error: ' . mysqli_error($con));
		}
		
		$sqlRedes = "INSERT INTO Redes VALUES ('".$email."', '".$skype."', '".$facebook."', '".$linkedin."', '".$twitter."')";
		if (!mysqli_query($con,$sqlRedes)){
			die('Error: ' . mysqli_error($con));
		}
		
		if($uni_maestria != "") $maestria = 1;
		if($uni_doctorado != "") $doctorado = 1;
		$sqlEducacion = "INSERT INTO Educacion VALUES ('".$email."', '".$universidad."', '".$titulo."', '".$carrera."', '".$anos_car."', '".$maestria."', '".$uni_maestria."', '".$tit_maestria."', '".$doctorado."', '".$uni_doctorado."', '".$tit_doctorado."')";
		if (!mysqli_query($con,$sqlEducacion)){
			die('Error: ' . mysqli_error($con));
		}
		
		$sqlLaboral = "INSERT INTO Laboral VALUES ('".$email."', '".$empresa."', '".$puesto."', '".$sector."', '".$web."', '".$email_emp."', '".$tel_emp."', '".$ext_emp."', '".$ano_ingreso."', '".$emp1."', '".$emp2."','".$emp3."')";
		if (!mysqli_query($con,$sqlLaboral)){
			die('Error: ' . mysqli_error($con));
		}
		
		$sqlDir = "INSERT INTO Direccion VALUES ('".$email."', '".$calle."', '".$num_ext."', '".$num_int."', '".$colonia."', '".$ciudad_emp."', '".$edo_emp."', '".$pais_emp."', '".$cp_emp."')";
		if (!mysqli_query($con,$sqlDir)){
			die('Error: ' . mysqli_error($con));
		}
		
		$sqlAiesec = "INSERT INTO Aiesec VALUES ('".$email."', '".$ano_ai."', '".$pais_ai."', '".$comite."', '".$ult_puesto."', '1', '".$ult_ano."')";
		if (!mysqli_query($con,$sqlAiesec)){
			die('Error: ' . mysqli_error($con));
		}

		$sqlMesa = "INSERT INTO MesaDir VALUES ('".$email."', '".$periodo_ini."', '".$periodo_fin."', '".$posicion_mesa."', '".$presidente."', '".$inter_ent."', '".$inter_sal."', '".$mkt_com."', '".$finanzas."', '".$rh."', '".$otra."')";
		if (!mysqli_query($con,$sqlMesa)){
			die('Error: ' . mysqli_error($con));
		}
		
		if($tip_participacion == "1") $mex = 1;
		if ($tip_participacion == "2") $ibero = 1;
		if ($tip_participacion == "3") $internacional = 1;
		$sqlPart = "INSERT INTO Participacion VALUES ('".$email."', '".$mex."', '".$ibero."', '".$internacional."')";
		if (!mysqli_query($con,$sqlPart)){
			die('Error: ' . mysqli_error($con));
		}
		
		if($congresos != "1") $congresos = 0;
		if ($alumnite != "1") $alumnite = 0;
		if ($isum != "1") $isum = 0;
		if ($agroups != "1") $agroups = 0;
		if ($webinars != "1") $webinars = 0;
		$alumni = $congresos.$alumnite.$isum.$agroups.$webinars;
		if ($consejo != "1") $consejo = 0;
		if ($patrocinador != "1") $patrocinador = 0;
		if ($mentoring != "1") $mentoring = 0;
		if ($cursos != "1") $cursos = 0;
		$aiesec_part = $consejo.$patrocinador.$mentoring.$cursos;
		if ($apoyo != "1") $apoyo = 0;
		if ($economia != "1") $economia = 0;
		$sociedad = $apoyo.$economia;
		$sqlAreaPart = "INSERT INTO AreaParticipacion VALUES ('".$email."', '".$alumni."', '".$aiesec_part."', '".$sociedad."', '".$otra_forma."')";
		if (!mysqli_query($con,$sqlAreaPart)){
			die('Error: ' . mysqli_error($con));
		}
	} else {
		echo "ya existe";
		$sqlUsuario = "UPDATE Usuarios SET nombres = '".$nombres."', apellido_p = '".$apeP."', apellido_m='".$apeM."', password = '".$password."', fec_nac = '".$fecNac."', genero = '".$genero."', pais_nac = '".$paisNac."', nacionalidad = '".$nacionalidad."', pais_res='".$paisRes."', ciudad_res = '".$ciudadRes."', tel='".$tel."', cel='".$cel."' WHERE email = '".$email."'";
		if (!mysqli_query($con,$sqlUsuario)){
			die('Error: ' . mysqli_error($con));
		}
	}
	
	// enviar email dependiendo si es actualización o nuevo registro
	$para  = $email;
	
	if($existente) {
		$titulo = 'Gracias '.$nombres.' por darte de alta en AIESEC Alumni Mexico';

		$mensaje = '
		<html>
		<head>
		  	<title>ONCE AN AIESECer, ALWAYS ALUMNI</title>
		</head>
		<body>
			  <p>Hola '.$nombres.',</p>
			  <p>Te has registrado en la nueva base de datos ALUMNI de AIESEC en México.<p>
			  <p>usuario es: '.$email.'</p>
			  <p>contraseña: '.$password.'</p><br />
			  <p>Para corregir o modificar tus datos te pedimos que ingreses a la página dando <a href="http://aiesec.org.mx/reg_alumni">click aquí</a></p>
			  <p>¡Muchas gracias!</p>
		</body>
		</html>';

	} else{
		$titulo = 'Gracias '.$nombres.' por actualizar tus datos de AIESEC Alumni Mexico';

		$mensaje = '
		<html>
		<head>
		  	<title>ONCE AN AIESECer, ALWAYS ALUMNI</title>
		</head>
		<body>
			  <p>Hola '.$nombres.',</p>
			  <p>Tus datos se han actualizado.<p>
			  <p>Recuerda que para corregir o modificar tus datos te pedimos que ingreses a la página dando <a href="http://www.http://aiesec.org.mx/reg_alumni">click aquí</a></p>
			  <p>¡Muchas gracias!</p>
		</body>
		</html>';
	}
	
	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	$cabeceras .= 'From: AIESEC Alumni <reg_alumni@aiesec.org.mx>' . "\r\n";
	$cabeceras .= "Reply-To: pcalzada@aiesec.org.mx\r\n";
	$cabeceras .= "Return-Path: myplace@example.com\r\n";
	
	// Mail it
	mail($para, $titulo, $mensaje, $cabeceras);

	include("DesconectaBD.php"); 
	session_destroy();
	header( 'Location: index.php' ) ;
	
	
?>