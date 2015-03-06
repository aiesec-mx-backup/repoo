<?php

// Enter the email where you want to receive the message


require("js/connection.php");

$getEmail = "select mail from lc where ubi = '".$_POST['uni']."'";


$result = mysqli_query($connection,$getEmail);

if ($result) {

	$row = mysqli_fetch_assoc($result);

	$emailTo = $row['contact'];

	$clientName = trim($_POST['name']);
	$clientEmail = trim($_POST['mail']);
	$subject = "[Reclutamiento AIESEC] ".$clientName;
	$message = trim($_POST['msg']);

	$headers = "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;

	mail($emailTo, $subject, $message, $headers);

	echo $emailTo ." ". $subject ." ". $message ." ". $headers;

	header("Location: contact_sent.html");

}
else
	echo "error";

?>
