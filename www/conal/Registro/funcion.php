<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//error_reporting(E_ALL);
function conexion()
{
    /*$con=  mysql_connect("localhost","root","");
    mysql_select_db("bd_conal_",$con);*/
    $con=mysql_connect("conaldb.db.12058720.hostedresource.com","conaldb","nC15@ags");
    mysql_select_db("conaldb",$con);
    date_default_timezone_set("Mexico/General");
    mysql_set_charset('utf8');
    if (!$con) {
    die('No pudo conectarse: ' . mysql_error());
    }
}
function revisar($correo)
{    

    $sql = "SELECT COUNT(*) num FROM usuario WHERE correo='".$correo."'";
    $consulta=mysql_query($sql);
    if(!$consulta)
    {
       header('Location: ../error.php?msj=1'); //agregar mensaje de problema de conexión 
    }
    $existe=mysql_result($consulta,0,"num");
    return $existe;
}
function consulta($correo)
{    
    $sql = "SELECT * FROM usuario WHERE correo='".$correo."'";
    $consulta=mysql_query($sql);
    if(!$consulta)
    {
        header('Location: ../error.php?msj=2'); //agregar mensaje de problema de conexión 
    }
    $existe=mysql_result($consulta,0,"idUsuario");
    return $existe;
}
function insert()
{
    session_start();

    //$pass=crypt_blowfish_bydinvaders($_POST['PasS']);
    $pass=$_POST["PasS"];
    //$sql="INSERT INTO usuario (correo, Pass, imgroute, idTipo)
    //VALUES ('".$_POST['EmaiL']."','".$pass."','".$_SESSION['nombrefoto']."',".$_POST['rol'].")";
    $sql="INSERT INTO usuario (correo, Pass, idTipo)
    VALUES ('".$_POST['EmaiL']."','".$pass."',".$_POST['rol'].")";
    $consulta=mysql_query($sql);
    if(!$consulta)
    {
    	header('Location: ../error.php?msj=2'); //agregar mensaje de problema de conexión
    }
}
function crypt_blowfish_bydinvaders($password, $digito = 7) //encripta el campo de contraseña
{
  $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
  $salt = sprintf('$2a$%02d$', $digito);
  for($i = 0; $i < 22; $i++)
  {
          $salt .= $set_salt[mt_rand(0, 22)];
  }
  return crypt($password, $salt);
}

if (isset($_POST['insertar']))
{
    conexion();
    if(revisar($_POST["EmaiL"])==1)
    {
        // header('Location: ../error.php?msj=1'); Completar la función para localizar
        $id =  consulta($_POST["EmaiL"]);
        if(login_us()==1)
        {
            $permisos = permisos();
            if($permisos == 2){
                header('Location: ../error.php?msj=5'); //Ya fue aceptado
            }
            if($permisos == 1){
                ubicar($id);
            }
            if($permisos == 0){
                $result = erase();
                if($result == 1){
                    session_start();
		            $_SESSION["idUsuario"]=$id;
		            header("Location: ../informacion.php");
                }else{
                	header("Location: ../error.php?msj=2");
                }
            }
        }
        else
        {
            header('Location: ../error.php?msj=3');
        }
    }
    else
    {
        /*include_once("class_imgUpldr.php"); 
        $subir = new imgUpldr;
        $subir->init($_FILES['imagen']);*/
        insert();
        $_SESSION["idUsuario"]=consulta($_POST['EmaiL']);
        mysql_close();
        header("Location: ../informacion.php");
    }
}
function ubicar($id)
{
    $sql = "SELECT COUNT(*) num FROM inf_us WHERE idUsuario ='".$id."'";
    $consulta=mysql_query($sql);
    if(!$consulta)
    {
       header('Location: ../error.php?msj=1'); //agregar mensaje de problema de conexión 
    }
    else
    {
        $existe=mysql_result($consulta,0,"num");
        if($existe == 1)
        {
            sig($id);
        }
        else
        {
            session_start();
            $_SESSION["idUsuario"]=$id;
            header("Location: ../informacion.php");
        }
    }
}
function sig($id)
{
    echo $id;
    $sql = "SELECT COUNT(*) num FROM preguntas WHERE idUsuario ='".$id."'";
    $consulta=mysql_query($sql);
    if(!$consulta)
    {
       header('Location: ../error.php?msj=1'); //agregar mensaje de problema de conexión 
    }
    else
    {
        $existe=mysql_result($consulta,0,"num");
        if($existe == 1)
        {
            sig($id);
            header('Location: ../gracias.php?msj=1');
        }
        else
        {
            session_start();
            $_SESSION["idUsuario"]=$id;
            $_SESSION["seg"]=1;
            header("Location: ../final.php");
        }
    }
}
function login_us()
{
    $pass=$_POST["PasS"];
    $email=$_POST['EmaiL'];
    $sql = "SELECT COUNT(*) num FROM usuario WHERE correo ='".$email."' AND Pass ='".$pass."'";
    $consulta=mysql_query($sql);
    return mysql_result($consulta,0,"num");
}
function permisos(){
    $pass=$_POST["PasS"];
    $email=$_POST['EmaiL'];
    $sql = "SELECT * FROM usuario WHERE correo ='".$email."' AND Pass ='".$pass."'";
    $consulta=mysql_query($sql);
    return mysql_result($consulta,0,"permisos");
}
function erase(){
    $id = consulta($_POST['EmaiL']);
    $sql = "DELETE FROM preguntas WHERE idUsuario = ".$id;
    $sql2 = "DELETE FROM c_a WHERE idUsuario = ".$id;
    $sql3 = "DELETE FROM inf_us WHERE idUsuario = ".$id;
    if(myslq_query($sql)){
        if(myslq_query($sql2)){
            if(myslq_query($sql3)){
                return 1;
            }else{
                return 0;
            }
        }else{
            return 0;
        }
    }else {
        return 0;
    }
}