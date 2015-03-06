<?php
if ($_POST) {
	require('connection.php');

	$query;

	if ($_POST['tipo'] == 'Vol') {
		$query = "select nombre, link, comite, proyecto from Tn 
				  where tipo = 'Vol' ";

		if ($_POST['imp_orph'] == 'false') {
			$query .= " and proyecto <> 'imp_orph'";
		}
		if ($_POST['shr_lang'] == 'false') {
			$query .= " and proyecto <> 'shr_lang'";
		}
		if ($_POST['gl_lead_sc'] == 'false') {
			$query .= " and proyecto <> 'gl_lead_sc'";
		}
		if ($_POST['my_lang_bd'] == 'false') {
			$query .= " and proyecto <> 'my_lang_bd'";
		}
		if ($_POST['soc_stup'] == 'false') {
			$query .= " and proyecto <> 'soc_stup'";
		}

	}
	else {
		$query = "select nombre, link, comite, proyecto from Tn
				  where tipo = 'Pro'";


		if ($_POST['bsns'] == 'false') {
			$query .= " and proyecto <> 'bsns'";
		}
		if ($_POST['eng'] == 'false') {
			$query .= " and proyecto <> 'eng'";
		}
		if ($_POST['it'] == 'false') {
			$query .= " and proyecto <> 'it'";
		}
		if ($_POST['mkt'] == 'false') {
			$query .= " and proyecto <> 'mkt'";
		}
		if ($_POST['teach'] == 'false') {
			$query .= " and proyecto <> 'teach'";
		}
		if ($_POST['sales'] == 'false') {
			$query .= " and proyecto <> 'sales'";
		}
		if ($_POST['undoc'] == 'false') {
			$query .= " and proyecto <> 'undoc'";
		}
	}

	$query .= " order by proyecto, nombre";


	$result = mysqli_query($connection,$query);
	$data = array();

	while($row = mysqli_fetch_assoc($result)) {
		$nombre = $row['nombre'];
		$link = $row['link'];
		$proy = $row['proyecto'];
		$com = $row['comite'];

		$data[] = array("nombre" => $nombre, "link" => $link, "proyecto" => $proy, "comite" => $com);
	}

	header('Content-type:application/json');
	echo json_encode($data); 
}

?>