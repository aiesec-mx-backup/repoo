<?php
function isChecked($name,$value) {
	if (isset($_POST[$name]) && $_POST[$name] == $value)
		return true;

	return false;
}

?>