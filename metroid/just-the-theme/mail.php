<?php
// Declare our variables
$name		= $_POST['name'];
$email		= $_POST['email'];
$subject	= $_POST['subject'];
$message	= nl2br($_POST['message']);

// Set a title for the message
$body		= "From $name, \n\n <br/> $message";
$headers	=
	'From: '.$email.'' . "\r\n" .
    'Reply-To: '.$email.'' . "\r\n" .
	'Content-type: text/html; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Put your email address here
if ( mail("tbirdal@gmail.com", $subject, $body, $headers) ) {
	// Display a thank you message in the callback
	$msg	= '';
	$msg	.= '<h5>Thank you, '.$name.'!</h5>';
	$msg	.= '<p>I will respond to your message as soon as possible.</p>';
} else {
	// Display an error message in the callback
	$msg	= '';
	$msg	.= '<h5>Ops...</h5>';
	$msg	.= '<p>We can\'t receive your messagem.</p>';
	$msg	.= '<p>Please, try again. Thank you!</p>';
}

echo $msg;
?>