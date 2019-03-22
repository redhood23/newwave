<?php

$name = $_post['name'];
$visitor_email = $_post['email'];
$message = $_post['message'];


$email_from = 'tgod3223@gmail.com';

$email_subject = "new form submission";

$email_body = "User Name: $name.\n".
                "User Email:$visitor_email.\n".
                    "User Message: $message.\n";


sto = "tgod3223@gmail.com"

    $headers = "From: $email_from \r\n";
$headers = "rReply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");




?>