<?php

require('connection.php');

$id = $_POST['id'];

$query = "select *
		  from tour_cursos tc, tour t  
		  where t.id = tc.idTour
		  and tc.idTour = ". $id;

$result = mysqli_query($connection, $query);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
	$curso_id = $row['idCurso'];
	$titulo = $row['titulo'];

	$data[] = array("curso_id" => $curso_id,
					"tour_titulo" => $titulo);
}


header('Content-type:application/json');
echo json_encode($data); 

?>