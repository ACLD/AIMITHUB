<?php
$to = "cecilmathew24@gmail.com, linson.lorence1@gmail.com";
$subject = "HTML email";

$message = "
hi fcuker
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sawantdevdatt@gmail.com>' . "\r\n";
$headers .= 'Cc: sawantdevdatt@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>