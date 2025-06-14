<?php
$name = $_POST['name'];
$user_email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$email_from = 'STIBulacan.com';
$email_subj = 'New Form Submission';
$email_body = "User Name : $name.\n".
                "User Email : $user_email.\n".
                "Subject : $subject.\n".
                "Message : $msg.\n";

$to = 'markaronedc@gmail.com';
$headers = "From : $email_from \r\n";
$headers .= "Reply-To : $user_email \r\n";

mail($to, $email_subj, $email_body, $headers);

header("Location: contact.html");
?>