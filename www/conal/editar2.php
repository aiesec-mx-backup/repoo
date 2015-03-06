<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Perfil</title>
</head>
<body bgcolor="#000000" >
<?php
header("Content-Type: text/html;charset=utf-8");
$con=mysql_connect("localhost","wwwaiese_conaldb","nC15@ags") or die (mysql_error());
mysql_select_db("wwwaiese_conaldb",$con);
mysql_set_charset('utf8', $con);
	$idUsuario=$_POST['idUsuario'];
	$nickname=$_POST['nick'];
	$telefono = $_POST['telefono'];
	$alimentacion = $_POST['alimentacion'];
	$restricciones = $_POST['restricciones'];
	$emergencia = $_POST['emergencia'];
	$playera = $_POST['playera'];
	$fiesta = $_POST['fiesta'];
	$foto = $_POST['foto'];
	$talla = $_POST['talla'];
	$color = $_POST['color'];
    /*if($foto==NULL){
	 include_once("Registro/SQL_perra/class_imgUpldr2.php"); 
     $subir = new imgUpldr;
        $subir->init($_FILES['foto']);
		$foto=$_SESSION['nombrefoto'];
}*/
	$query="UPDATE  inf_us SET nickname='$nickname', telefono='$telefono', vegetariano='$alimentacion', restricciones='$restricciones', ContactoEmergencia='$emergencia', tshirt='$playera', party='$fiesta', talla='$talla', color='$color' WHERE idUsuario='$idUsuario'";
	$r=mysql_query($query,$con)or die (mysql_error());
if(mysql_affected_rows() != 0){ 
echo "<script type='text/javascript'>
                window.alert('Información cambiado con éxito! Para ver los cambios es necesario volver a entrar a tu cuenta :)')
                window.location.href='index.php'; 
				</script>";
					$query2="UPDATE  usuario SET imgroute='$foto' WHERE idUsuario='$idUsuario'";
	$r1=mysql_query($query2,$con)or die (mysql_error());
}else{
echo '<script type="text/javascript">
                alert("Hubo un error. Intentalo nuevamente");
                window.history.back();
                </script>';
}


 
?>
</body>
</html>