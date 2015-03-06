<?php 
	function conecta(){
		$DBhost = "jujogoru.db.12058720.hostedresource.com";
		$DBuser = "jujogoru";
		$DBpassword = "a0Y9Ee2Px986%";
		$DBbase = "jujogoru";
		return $mysqli = new mysqli($DBhost, $DBuser, $DBpassword, $DBbase);
	}
	error_reporting(E_ALL&~E_NOTICE);  

	$mysqli = conecta();
	$sql = "SELECT * FROM TableTest";
	if($result = $mysqli->query($sql)){
		$row_cnt = $result->num_rows;
		if($row_cnt > 0){
			while ($row = $result->fetch_array()) {
				echo "ID: ".$row['ID_Test']."<br>";
				echo "Nombre: ".$row['Nombre_Test']."<br>";
			}
		}else
			echo 'No hay resultados';

		$mysqli->close();
	}else
		echo 'Error de conexión';
?>