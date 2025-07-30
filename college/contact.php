<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'stefnrctutorial.com';

$email_subject = 'New Form Submission';

$email-body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message .\n";

$to = 'unborthered235@gmail.com';

$headers = "From: $email-from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email-body,$headers);

header("Location: Contact.html");

?>