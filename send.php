<?php
header('content-type: application/json; charset=utf-8');

if (isset($_GET["mrova-name"])) {
	$name = strip_tags($_GET['mrova-name']);
	$email = strip_tags($_GET['mrova-email']);
	$message = strip_tags($_GET['mrova-message']);
	$header = "From: ". $name . " <" . $email . ">rn"; 

	$ip = $_SERVER['REMOTE_ADDR'];
	$httpref = $_SERVER['HTTP_REFERER'];
	$httpagent = $_SERVER['HTTP_USER_AGENT'];
	$today = date("F j, Y, g:i a");    

	$recipient = 'sunny@mrova.com';
	$subject = 'Contact Form';
	$mailbody = "
First Name: $name
Email: $email
Message: $message

IP: $ip
Browser info: $httpagent
Referral: $httpref
Sent: $today
";
	$result = 'success';

	if (mail($recipient, $subject, $mailbody, $header)) {
		echo json_encode($result);
	}
}
?>
