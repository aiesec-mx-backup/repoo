<?php
header("Content-Type: text/html;charset=utf-8");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
