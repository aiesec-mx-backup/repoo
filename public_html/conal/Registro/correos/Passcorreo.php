<?php

$correo = $_POST["email"];
conexion();
$sql = "SELECT * FROM usuario WHERE correo = '" . $correo . "'";
$result = mysql_query($sql);
$Pass = mysql_result($result, 0, 'Pass');
$x = mysql_num_rows($result);
$permisos = mysql_result($result, 0, 'permisos');
if ($x == 1) {
    if($permisos == 2){
        $objMensaje = Array(
        'para' => $correo,
        'cuerpo' => 'HEY AIESEC 
¿Así que olvidaste tu contraseña incluso cuando te advertimos varias veces que la recordaras? 
No te preocupes! tarde o temprano a todos nos pasa. YOLO! aquí tienes tus datos.
    Tu correo registrado es: ' . $correo . '
    Tu contraseña es: ' . $Pass . '
Nos vemos en CONAL!',
        'asunto' => 'CONAL 2015 - Password'
        );

        if (mail($objMensaje['para'], $objMensaje['asunto'], $objMensaje['cuerpo'])) {
            echo 'El mensaje se envi&oacute; correctamente!';
            header("Location: ../../Password.php?msj=1"); //Correo enviado correctamente
        } else {
           header('Location: ../../Password.php?msj=2');//correo no valido o no encuentra el archivo correo
        }

    }
    if($permisos == 1){
        $objMensaje = Array(
        'para' => $correo,
        'cuerpo' => 'HEY AIESEC 
¿Así que olvidaste tu contraseña incluso cuando te advertimos varias veces que la recordaras? 
No te preocupes! tarde o temprano a todos nos pasa. YOLO! aquí tienes tus datos.
    Tu correo registrado es: ' . $correo . '
    Tu contraseña es: ' . $Pass . '
Nos vemos en CONAL!

PD: Recuerda que no tendrás acceso al sistema a menos que hayas sido aceptado como delegado, en este momento tu perfil aún está pendiente.',
        'asunto' => 'CONAL 2015 - Password'
        );

        if (mail($objMensaje['para'], $objMensaje['asunto'], $objMensaje['cuerpo'])) {
            echo 'El mensaje se envi&oacute; correctamente!';
            header("Location: ../../Password.php?msj=4"); //Correo enviado correctamente
        } else {
           header('Location: ../../Password.php?msj=2');//correo no valido o no encuentra el archivo correo
        }
    }
    if($permisos == 0){
        header('Location: ../../Password.php?msj=5');//correo no valido o no encuentra el archivo correo
    }
}
if($x == 0){
    header("Location: ../../Password.php?msj=0");//correo no existe
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

?>