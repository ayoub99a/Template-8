<?php

$name = $_POST['fullname'];
$visitor_email = $_POST['email'];
$subject = $_POST['sub'];
$message = $_POST['msg'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n" .
                "User Email: $visitor_email.\n" .
                "Subject: $subject.\n" .
                "User Message: $message.\n";

$to = "ayuob1999118@gmail.com";

$headers = "From: $email_from \r\n";

$headers.= "Reply-To: $visitor_email\r\n";

header("Location: contact.html");

mail($to,$email_subject,$email_body, $headers);

?>