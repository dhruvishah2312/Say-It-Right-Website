<!--subscription email php-->

<?php

$email = $_POST["emailAddress"];
$to      = $email;
$subject = 'Thanks for your subscription';
$message = 'hello';
$headers = 'From: dhruvisharma2312@gmail.com' . "\r\n" .
     phpversion();

mail($to, $subject, $message, $headers);
?>