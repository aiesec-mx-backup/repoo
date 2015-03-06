<?php
header('Content-Type: text/html; charset=UTF-8');
function conexion()
{
    $con=mysql_connect("conaldb.db.12058720.hostedresource.com","conaldb","nC15@ags");
    mysql_select_db("conaldb",$con);
    date_default_timezone_set("Mexico/General");
    mysql_set_charset('utf8');
    if (!$con) {
    die('No pudo conectarse: ' . mysql_error());
    }
}

conexion();

$idEstado = $_GET["Estado"];
if($_GET["Estado"]==0)
{
    
    $sql = mysql_query("
    SELECT u.nombre NOMBRE, u.apellidos APELLIDOS, us.correo CORREO, u.ronda RONDA, u.semestre SEMESTRE, u.carrera CARRERA, u.area AREA, u.currentrole ROL, p.uno UNO, p.dos DOS, p.tres TRES, p.cuatro CUATRO, p.cinco CINCO
    FROM inf_us u, preguntas p, usuario us
    WHERE 
    u.idUsuario = p.idUsuario 
    AND u.idUsuario = us.idUsuario
    AND p.idUsuario = us.idUsuario
");
$columns_total = mysql_num_fields($sql);

// Get The Field Name
echo mysql_result($sql, 1, 'CARRERA');

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "BDCONAL.csv";

header("content-type:application/csv;charset=UTF-8");
header("Content-Disposition:attachment;filename=\"BDCONAL.csv\"");
setlocale(LC_ALL, 'fr_FR.UTF-8');
iconv("UTF-8", "Windows-1252", maData);
mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
echo mb_convert_encoding($output, 'UTF-16LE', 'UTF-8');
exit;
    
}else{
    
    $sql = mysql_query("
    SELECT u.nombre NOMBRE, u.apellidos APELLIDOS, us.correo CORREO, u.ronda RONDA, u.semestre SEMESTRE, u.carrera CARRERA, u.area AREA, u.currentrole ROL, p.uno UNO, p.dos DOS, p.tres TRES, p.cuatro CUATRO, p.cinco CINCO
    FROM inf_us u, preguntas p, usuario us
    WHERE u.idLC =".$idEstado ."
    AND u.idUsuario = p.idUsuario 
    AND u.idUsuario = us.idUsuario
    AND p.idUsuario = us.idUsuario
");
$columns_total = mysql_num_fields($sql);

// Get The Field Name
echo mysql_result($sql, 1, 'CARRERA');

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "BDCONAL.csv";

header("content-type:application/csv;charset=UTF-8");
header("Content-Disposition:attachment;filename=\"BDCONAL.csv\"");
setlocale(LC_ALL, 'fr_FR.UTF-8');
iconv("UTF-8", "Windows-1252", maData);
mb_convert_encoding($csv, 'UTF-16LE', 'UTF-8');
echo mb_convert_encoding($output, 'UTF-16LE', 'UTF-8');
exit;
    
}


?>