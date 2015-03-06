<?php

require('connection.php');

$id = $_POST['id'];

$query = "select *
		  from curso c
		  where c.id = ". $id;



$result = mysqli_query($connection, $query);
$data = array();

while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['id'];
	$titulo = $row['titulo'];
	$descripcion = $row['descripcion'];
	$video_link = $row['video_link'];
	$pres_link = $row['pres_link'];
	$audio_link = $row['audio_link'];
	$fecha = $row['fecha'];
	$num_clicks = $row['num_clicks'];

	$data[] = array("id" => $id,
					"titulo" => $titulo,
					"descripcion" => $descripcion,
					"video_link" => $video_link,
					"pres_link" => $pres_link,
					"audio_link" => $audio_link,
					"fecha" => $fecha,
					"num_clicks" => $num_clicks);
}

$query2 = "update curso
		   set num_clicks = " . $num_clicks+1 . "
		   where id = " . $id;

$result = mysqli_query($connection, $query);


header('Content-type:application/json');
echo json_encode($data); 

?>