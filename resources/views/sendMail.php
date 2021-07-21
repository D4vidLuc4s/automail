<h1>Email</h1>

<?php
$to = "test@mailhog.local";
$subject = "Hey, I'm Your Father";
$body = "Hello, MailHog!";
$headers = "From: darth_vader@mailhog.com" . "\r\n";
print_r(mail($to, $subject, $body, $headers));
?>