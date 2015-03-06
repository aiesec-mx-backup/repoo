<?PHP
error_reporting(E_ALL);
header("Content-Type: text/html;charset=utf-8");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include "./SQL_perra/conexion.php";
session_start();
conexion();
function insertar() 
{
    $idUsuario=$_SESSION["idUsuario"];
    $conferencia=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $genero=$_POST["sexo"];
    $ronda=$_POST["round"];
    $telefono=$_POST["telefono"];
    $idLC=$_POST["lc"];
    $idUniversidad =$_POST["uni"];
    $semestre=$_POST["sem"];
    $carrera=$_POST["carrera"];
    $entro_aiesec=$_POST["e_a"];
    $area=$_POST["area"];
    $currentrole=$_POST["arol"];
    $nickname=$_POST["nick"];
    $vegetariano=$_POST["veg"];
    $restricciones=$_POST["restriccion"];
    $ContactoEmergencia=$_POST["emergencia"];
    $datosmoviles=$_POST["datosmoviles"];
    $sql = "INSERT INTO inf_us (idUsuario, nombre, apellidos, genero, ronda, telefono, idLC, idUniversidad, semestre, carrera, entro_aiesec, area, currentrole, nickname, vegetariano, restricciones, ContactoEmergencia, datosmoviles)
           VALUES ('".$idUsuario."','".$conferencia."','".$apellidos."','".$genero."','".$ronda."','".$telefono."','".$idLC."','".$idUniversidad."','".$semestre."','".$carrera."','".$entro_aiesec."','".$area."','".$currentrole."','".$nickname."','".$vegetariano."','".$restricciones."','".$ContactoEmergencia."','".$datosmoviles."')";
    $consulta=  mysql_query($sql);
    if(!$consulta)
    {
        $mensaje="Error al insertar";
        echo $mensaje;
        echo "<br>".$sql;
        header('Location: ../error.php?msj=2');
    }
    else
    {
        $mensaje="Datos insertados";   
    }
    return $mensaje;
}

if(insertar()=="Datos insertados")
{
    $idUsuario =$_SESSION["idUsuario"];
    if (isset($_POST['c12']))
    {
        $conferencia =$_POST['c12'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['rnd2012']))
    {
        $conferencia = $_POST['rnd2012'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['e12']))
    {
        $conferencia = $_POST['e12'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['ap12']))
    {
        $conferencia = $_POST['ap12'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['c13']))
    {
        $conferencia = $_POST['c13'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['at13']))
    {
        $conferencia = $_POST['at13'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['e13']))
    {
        $conferencia = $_POST['e13'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['ap13']))
    {
        $conferencia = $_POST['ap13'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
        
    }
    if (isset($_POST['c14']))
    {
        $conferencia = $_POST['c14'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['at14']))
    {
        $conferencia = $_POST['at14'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['e14']))
    {
        $conferencia = $_POST['e14'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    if (isset($_POST['ap14']))
    {
        $conferencia = $_POST['ap14'];
        $sql = "INSERT INTO c_a (idUsuario, nombre)
                VALUES ('".$idUsuario."','".$conferencia."')";
        $consulta= mysql_query($sql);
        if(!$consulta)
        {
            header('Location: ../error.php?msj=2');
        }
    }
    mysql_close();
    header("Location: ./final.php");
}
else
{
    mysql_close();
    header('Location: ./error.php?msj=2');
}