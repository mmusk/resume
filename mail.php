<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$project= $_POST['message'];
$message= $_POST['message'];
$to = "mdmuzakkir296@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Project = ". $message . "\r\n Message =" . $message;
$headers = "From: noreply@https://mmusk.github.io/Muzakkir__Portfolio/#" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>