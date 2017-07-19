<?php


if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$name     = $_POST['name'];
$email    = $_POST['email'];
$subject  = "information request: goodie goodie"
$comments = $_POST['message'];

if(get_magic_quotes_gpc()) {
	$comments = stripslashes($comments);
}


// Configuration option.
// Enter the email address that you want to emails to be sent to.
// Example $address = "joe.doe@yourdomain.com";

//$address = "example@themeforest.net";
$address = "stephanie.roland89@gmail.com";


// Configuration option.
// i.e. The standard subject will appear as, "You've been contacted by John Doe."

// Example, $e_subject = '$name . ' has contacted you via Your Website.';

$e_subject = 'Vous avez été contactée par ' . $name . '.';


// Configuration option.
// You can change this if you feel that you need to.
// Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.

$e_content = "\"$comments\"" . PHP_EOL . PHP_EOL;
$e_reply = "Vous pouvez recontacter $name via son e-mail: $email";

$msg = wordwrap( $e_content . $e_reply, 70 );

$headers = "From: $email" . PHP_EOL;
$headers .= "Reply-To: $email" . PHP_EOL;
$headers .= "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

mail($address, $e_subject, $msg, $headers);
?>