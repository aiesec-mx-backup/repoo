<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(E_ALL);

if (isset($_POST['revisar'])) {
    conexion();
    if (revisar($_POST["EmaiL"]) == 1) {
        // header('Location: ../aviso.php?msj=1'); Completar la función para localizar
        $id = consulta($_POST["EmaiL"]);
        if (login_us() == 1) {
            ubicar($id);
        } else {
            header('Location: ../aviso.php?msj=3');
        }
    } else {
        header('Location: ../aviso.php?msj=4'); //Agregar error 4, no se ha registrado.
    }
}

function conexion() {
    /* $con=  mysql_connect("localhost","root","");
      mysql_select_db("bd_conal_",$con); */
    $con = mysql_connect("conaldb.db.12058720.hostedresource.com", "conaldb", "nC15@ags");
    mysql_select_db("conaldb", $con);
    date_default_timezone_set("Mexico/General");
    mysql_set_charset('utf8');
    if (!$con) {
        die('No pudo conectarse: ' . mysql_error());
    }
}

function revisar($correo) {

    $sql = "SELECT COUNT(*) num FROM usuario WHERE correo='" . $correo . "'";
    $consulta = mysql_query($sql);
    if (!$consulta) {
        header('Location: ../aviso.php?msj=1'); //agregar mensaje de problema de conexión 
    }
    $existe = mysql_result($consulta, 0, "num");
    return $existe;
}

function consulta($correo) {
    $sql = "SELECT * FROM usuario WHERE correo='" . $correo . "'";
    $consulta = mysql_query($sql);
    if (!$consulta) {
        header('Location: ../aviso.php?msj=2'); //agregar mensaje de problema de conexión 
    }
    $existe = mysql_result($consulta, 0, "idUsuario");
    return $existe;
}

function ubicar($id) {
    $sql = "SELECT COUNT(*) num FROM inf_us WHERE idUsuario ='" . $id . "'";
    $consulta = mysql_query($sql);
    if (!$consulta) {
        header('Location: ../aviso.php?msj=1'); //agregar mensaje de problema de conexión 
    } else {
        $existe = mysql_result($consulta, 0, "num");
        if ($existe == 1) {
            sig($id);
        } else {
            session_start();
            $_SESSION["idUsuario"] = $id;
            header("Location: ../informacion.php");
        }
    }
}

function sig($id) {
    echo $id;
    $sql = "SELECT COUNT(*) num FROM preguntas WHERE idUsuario ='" . $id . "'";
    $consulta = mysql_query($sql);
    if (!$consulta) {
        header('Location: ../aviso.php?msj=1'); //agregar mensaje de problema de conexión 
    } else {
        $existe = mysql_result($consulta, 0, "num");
        if ($existe == 1) {
            $ruta = correo($id);
            mysql_close();
            header("Location: ../correos/funcion-mail.php?correo=".$ruta['correo']."&Pass=".$ruta['Pass']."");
            //header('Location: ../gracias.php?msj=1');
        } else {
            session_start();
            $_SESSION["idUsuario"] = $id;
            $_SESSION["seg"] = 1;
            header("Location: ../final.php");
        }
    }
}

function login_us() {
    $pass = $_POST["PasS"];
    $email = $_POST['EmaiL'];
    $sql = "SELECT COUNT(*) num FROM usuario WHERE correo ='" . $email . "' AND Pass ='" . $pass . "'";
    $consulta = mysql_query($sql);
    return mysql_result($consulta, 0, "num");
}

function correo($idUsuario){
    conexion();
    $sqlc = "SELECT * FROM usuario WHERE idUsuario = ".$idUsuario;
    $consultas = mysql_query($sqlc);
    $correo = mysql_result($consultas, 0, "correo");
    $Pass = mysql_result($consultas, 0, "Pass");
    $resulta = array(
        'correo' => $correo,
        'Pass' => $password);
    return $resulta;
}