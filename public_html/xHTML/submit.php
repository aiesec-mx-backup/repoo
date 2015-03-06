<?php
include_once("model/consulta.php");

$Base=7;
$Fortalezas=$_POST['numF'];
$Debilidades=$_POST['numD'];
$Oportunidades=$_POST['numO'];
$Amenazas=$_POST['numA'];
$AIESEC=$_POST['numAIESEC'];
$PROFESSIONAL=$_POST['numPROF'];
$PERSONAL=$_POST['numPER'];


$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$foto=$_POST['foto'];
$email=$_POST['email'];

$insertUsuarios = "INSERT INTO `aiesecipn`.`usuario` (`id`, `nombre`, `edad`, `foto`, `email`) VALUES (NULL, '$nombre', '$edad', '$foto', '$email');";
//echo $insertUsuarios;
mysql_query($insertUsuarios);	
//echo '<br/>';

$suenos=$_POST['suenos'];
$intereses=$_POST['intereses'];
$actividades=$_POST['actividades'];
$fecha= date('y-m-d h:m:s');
$insertAwareness = "INSERT INTO `aiesecipn`.`self_awareness` (`email`, `suenos`, `intereses`, `actividades`) VALUES ('$email', '$suenos', '$intereses', '$actividades' );";
//echo $insertAwareness;
mysql_query($insertAwareness);	
//echo '<br/>';


$insertTimelineBase="INSERT INTO `aiesecipn`.`timeline` (`email`, `meta`, `3m`, `6m`, `12m`, `24m`, `60m`, `120m`,`tipo`) VALUES ('".$email."', ";
$insertTimeline="";

$index=0;
$bandera=false;
$fortalezas="";
$debilidades="";
$oportunidades="";
$amenazas="";
$Aiesec="";
$Professional="";
$Personal="";


foreach ($_POST as $key => $value) {

	$index+=1;

	if($index>($Base) && $index<=($Base+$Fortalezas)){
		if($_POST[$key]!=""){
			$fortalezas = $fortalezas."@".$_POST[$key];
		}
	}
	if($index>($Base+$Fortalezas) && $index<=($Base+$Fortalezas+$Debilidades)){
		if($_POST[$key]!=""){
			$debilidades = $debilidades."@".$_POST[$key];
		}
	}
	if($index>($Base+$Fortalezas+$Debilidades) && $index<=($Base+$Fortalezas+$Debilidades+$Oportunidades)){
		if($_POST[$key]!=""){
			$oportunidades = $oportunidades."@".$_POST[$key];
		}
	}
	if($index>($Base+$Fortalezas+$Debilidades+$Oportunidades) && $index<=($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas)){
		if($_POST[$key]!=""){
			$amenazas = $amenazas."@".$_POST[$key];
		}
	}

	if($index>($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas) && $index<=($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8)){

		if(($index-$Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas)%8==0){
			$Aiesec=$Aiesec." '".$_POST[$key]."";
			$insertTimeline=$insertTimelineBase.''.$Aiesec."');";
			
			if($bandera){
			//echo $insertTimeline;
				mysql_query($insertTimeline);
				$bandera=false;

			}
			$Aiesec="";
		}
		else{
			if("".$_POST[$key]!="")
				$bandera=true;
			$Aiesec = $Aiesec." ' ".$_POST[$key]." ', ";
			}
		}

	if($index>($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8) && $index<=($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8+$PROFESSIONAL*8)){

		if(($index-$Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8)%8==0){
			$Professional=$Professional." '".$_POST[$key]."";
			$insertTimeline=$insertTimelineBase.''.$Professional."');";
			
			if($bandera){
				//echo $insertTimeline;
				mysql_query($insertTimeline);	
				$bandera=false;
			}
			$Professional="";
		}
		else{
			if("".$_POST[$key]!="")
				$bandera=true;
			$Professional = $Professional." ' ".$_POST[$key]." ', ";
		}
	}

	if($index>($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8+$PROFESSIONAL*8) && $index<=($Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$AIESEC*8+$PROFESSIONAL*8+$PERSONAL*8)){			

		if(($index-$Base+$Fortalezas+$Debilidades+$Oportunidades+$Amenazas+$PROFESSIONAL*8)%8==0){
			$Personal = $Personal." '".$_POST[$key]."";
			$insertTimeline=$insertTimelineBase.''.$Personal."');";
			if($bandera){
				//echo $insertTimeline;
				mysql_query($insertTimeline);	
				$bandera=false;
			}
			$Personal="";
		}
		else{
			if("".$_POST[$key]!= "")
				$bandera= true;
			$Personal = $Personal." ' ".$_POST[$key]." ', ";
		}
	}
}


$insertFODA="INSERT INTO `aiesecipn`.`foda` (`email`, `fortalezas`, `debilidades`, `oportunidades`, `amenazas`) VALUES ('".$email."', '".$fortalezas."', '".$debilidades."', '".$oportunidades."', '".$amenazas."');";
//echo $insertFODA;
mysql_query($insertFODA);	

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <title>Career Plan - AIESEC IPN</title>

	    <!---------- CSS ------------>
	    <link rel="stylesheet" type="text/css" href="./css/style.css">
	    <script language="javascript"></script>
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
	</head>

	<body>
		<p>
			<h2 class="Response">Formulario Enviado</h2>
			<h3 class="Response">Gracias</h3>
		</p>




	    <script type="text/javascript" src="js/functions.js"></script>
	</body>
</html>