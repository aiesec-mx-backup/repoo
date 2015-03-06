<?php
error_reporting(E_ALL);
 $password=$_GET['a'];
  function crypt_blowfish_bydinvaders($password, $digito = 7) 
  {
    $set_salt = './1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    $salt = sprintf('$2a$%02d$', $digito);
    for($i = 0; $i < 22; $i++)
    {
            $salt .= $set_salt[mt_rand(0, 22)];
    }
    return crypt($password, $salt);
}
$passwordenBD=$_GET['b'];
//$passwordenBD = crypt_blowfish_bydinvaders($password);
 echo crypt_blowfish_bydinvaders($password);

if( crypt($password, $passwordenBD) == $passwordenBD) {
	echo '<br>Es igual';
}
else
{
    echo '<br>ni madres no es igual puta';
}