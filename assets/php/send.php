<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'outlawed@nujs.edu';
$message = 'FROM: '.$name."\r\n".' Email: '.$email."\r\n".'Message: '.$message;
$headers = 'From: mail@nujsoutlawed.in' . "\r\n";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "Your response was sent!"; // success message
}else{
echo "Invalid Email, please provide an correct email.";
}

?>
