<?php 

$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
$number = $_POST['phonenumber'];
$email = $_POST['email'];
$message = $_POST['mensaje'];
$formcontent="From: $name\n Message: $message \n";
$recipient = 'victor-dfa@hotmail.com';
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you very much!";
header ("location: about-me.html")
?>