<?

//Parametros de la db para realizar la conexion
$dbhost="localhost";
$dbusuario="root";
$dbpassword="arigato1";
$db="aiesec_cp";
$conexion = mysql_connect($dbhost,$dbusuario,$dbpassword);
mysql_select_db($db, $conexion);
?>

