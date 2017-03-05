<?php
$to = 'vanwinkleryan@fallongreenwave.com';
$subject = 'Webpage Contact Form Entry';
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$headers = 'From:$email';
$sent = mail($to, $subject, $message, $headers);
?>