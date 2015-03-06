<?php
header("Content-Type: text/html;charset=utf-8");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "./SQL_perra/conexion.php";
session_start();
conexion();
$idUsuario = $_SESSION["idUsuario"];
$comillas = array( "'", '"' );
$uno = str_replace($comillas, "", $_POST["uno"]);
$dos = str_replace($comillas, "", $_POST["dos"]);
$tres = str_replace($comillas, "", $_POST["tres"]);
$cuatro = str_replace($comillas, "", $_POST["cuatro"]);
$cinco = str_replace($comillas, "", $_POST["cinco"]);
$sql = "INSERT INTO preguntas (idUsuario,uno,dos,tres,cuatro,cinco)
        VALUES ('".$idUsuario."','".$uno."','".$dos."','".$tres."','".$cuatro."','".$cinco."')";
        echo $sql;
$consulta=mysql_query($sql);
    if(!$consulta)
    {
        mysql_close();
        header('Location: ./error.php?msj=2'); //agregar mensaje de problema de conexión 
    }
    else
    {
        $ruta = correo($idUsuario);
        mysql_close();
        header("Location: ./correos/funcion-mail.php?correo=".$ruta['correo']."&Pass=".$ruta['Pass']."");
    }
function correo($idUsuario){
    $sqlc = "SELECT * FROM usuario WHERE idUsuario = ".$idUsuario;
    $consultas = mysql_query($sqlc);
    $correo = mysql_result($consultas, 0, "correo");
    $Pass = mysql_result($consultas, 0, "Pass");
    $resulta = array(
        'correo' => $correo,
        'Pass' => $password);
    return $resulta;
}