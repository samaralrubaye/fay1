<?php
//get data from form

$Firstname = $_POST['firstname'];
$Lastname = $_POST['lastname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "engsamaralrubaye@gmail.com";
$subject = "Mail From cyfay";
$txt ="First Name = ". $Firstname . "\r\n . First Name = ". $Firstname . "\r\n.  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: engsamaralrubaye@gmail.com" . "\r\n" .
"CC: engsamaralrubaye@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
