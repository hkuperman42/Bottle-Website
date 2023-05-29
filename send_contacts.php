<?php
// Get data from form 
$name = $_POST['name'];
$email= $_POST['email'];
 
$to = "contact.bottletech@gmail.com";
$subject = "NEW SUBSCRIBER";
 

$txt ="Name = ". $name . "\r\n  Email = "
    . $email;
 
if($email != NULL) {
    mail($to, $subject, $txt);
}
 
// Redirect to
header("Location: index.html");
?>