<?php
$user = $_REQUEST['user'];
if (!isset($user) || $user === ''){
	$user = 'AIESECMexico';
}
$homepage = file_get_contents('https://twitter.com/status/user_timeline/AIESECMexico');
echo $homepage;
?>