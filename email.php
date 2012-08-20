<?php

$to      = 'mattkennedydesign@gmail.com';
$subject = 'Form Email';
$message = wordwrap($_POST["text"], 70);
$headers = "From: ". $_POST["email"]. "\r\n" .
    "Reply-To: ". $_POST["email"];

mail($to, $subject, $message, $headers);
header('Location: index.html');

?>