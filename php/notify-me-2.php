<?php

header('content-type: application/json');

	$o = new stdClass();
	$o->status = 'success';
	echo json_encode($o);

	$email_to = "circula@circular.tech"; // Replace by your email address
	$email = $_POST["email"];
	$text = "Please add to the Circular Tech newsletter: $email";

	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
	$headers .= "From:<$email>\n";
    

	// original line: mail($email_to, "Message", $text, $headers);
    mail($email_to, $text, $headers);

?>
