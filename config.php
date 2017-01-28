<!-- 
Author -> Saiikat Chakrabortty.
website-> Www.Saikat.cf
 -->

<?php

$numbr = $_POST['contactMobile'];
$name  = $_POST['contactName'];



/**************************
 | API SMS GATEWAY        |
 | STARTS here smshorizon |
 **************************/

 //username for SMS gateway
 $user = "***username for SMS Horizon goes here****";

// // API KEY for SMS gateway
$apikey = "***Api Key can be found on you account***"; 

// //Sender ID, for SMS gateway
$senderid  =  "***Your 6 digit sender id for smshorizon***"; 

// // mobile number comes from $numbr
$mobile  = $numbr; 

// // Message content
$message = "Hi,".$name." , This is test message. Happy SMSing.Powered by SMS Horizon."; 
$message = urlencode($message);


// // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni" 

//-> Sending message
$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=HandyS&message=".$message."&type=txt"); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
     curl_close($ch); 
 echo $output;


?>