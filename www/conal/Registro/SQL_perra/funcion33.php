<?php
/* 
 Perdon por el desorden! :D 
 */
//error_reporting(E_ALL);  // Se usa para debuguear!  :D
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
    $sql="INSERT INTO usuario (correo, Pass, imgroute, idTipo)
    VALUES ('".$_POST['EmaiL']."','".$pass."','".$_SESSION['nombrefoto']."',".$_POST['rol'].")";
    /*$sql="INSERT INTO usuario (correo, Pass, idTipo)
    VALUES ('".$_POST['EmaiL']."','".$pass."',".$_POST['rol'].")";*/
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

if (isset($_POST['insertar'])) //Aquí comienza a ejecutarse, este if comprueba que se haya llegado por medio del formulario.
{
    conexion(); // establece la conexión obvi.
    if(revisar($_POST["EmaiL"])==1) //comprueba si el correo existe
    {
        //Si existe hace un login! 
        $id =  consulta($_POST["EmaiL"]); 
        if(login_us()==1) //sí y sólo sí el usuario y la contraseña existen se puede proceder a ubicarse en el formulario
        {
            ubicar($id); //función que localiza la cantidad de preguntas llenadas o de formularios enviados.
        }
        else
        {
            header('Location: ../error.php?msj=3'); //si el correo existe pero no coincide con la contraseña, el error 3 básicamente dice. TE DIJE QUE NO LA OLVIDARAS.
        }
    }
    else //Si el correo no existe, se procede a insertarse 
    {
        include_once("class_imgUpldr.php"); 
        $subir = new imgUpldr;
        $subir->init($_FILES['imagen']);
        insert();//función que ingresa nuevo usuario
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