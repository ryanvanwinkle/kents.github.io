<?php
$email = $_POST['email'];
$message = $_POST['message'];
$to = "vanwinkleryan@fallongreenwave.com";
$subject = "Webpage Contact Us Form";

mail ($to, $subject, $message, "From: " . $email);
echo "Your message has been sent.";
header( "refresh:2;url=index.html" );
?>
