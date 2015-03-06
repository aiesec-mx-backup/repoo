<?php

require('connection.php');

$ubi = $_POST['ubi'];


$query = "select * 
		  from session s, lc l 
		  where s.idLc =  l.id
		  and l.ubi = '" . $ubi . "'
		  order by fecha";

$result = mysqli_query($connection,$query);
$data = array();


while($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$fecha = $row['fecha'];
	$idlc = $row['idLc'];
	$tipo = $row['tipo'];
	$prog = $row['prog'];
	$link = $row['link'];

	$data[] = array("id" => $id, "fecha" => $fecha, "idlc" => $idlc, "tipo" => $tipo, "prog" => $prog, "link" => $link);
}

header('Content-type:application/json');
echo json_encode($data); 

?>