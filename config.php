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
 $user = "******username*******";

// // API KEY for SMS gateway
$apikey = "************API KEY************"; 

// //Sender ID, for SMS gateway
$senderid  =  "************ senderid ************"; 

// // mobile number comes from $numbr
$mobile  = $numbr; 

// // Message content
$message = "Hi,".$name." , This is test message. Happy SMSing.Powered by SMS Horizon."; 
$message = urlencode($message);


// // For Plain Text, use "txt" ; for Unicode symbols or regional Languages like hindi/tamil/kannada use "uni" 

//-> Sending message
$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=txt"); 
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);      
     curl_close($ch); 
 //echo $output;

/**********************
 |Database MySql      |
 | Connections and ops|
 **********************/
//connection
 error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
// turn on output buffering 
ob_start();

define('DB_DRIVER', 'mysql');
define("DB_HOST", "sql308.epizy.com");
define("DB_USER", "epiz_19505897");
define("DB_PASSWORD", "saikat");
define("DB_DATABASE", "epiz_19505897_smsgateway");

// basic options for PDO 
$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

//connect with the server
try {
    $DB = new PDO(DB_DRIVER . ':host=' . DB_HOST . ';dbname=' . DB_DATABASE, DB_USER, DB_PASSWORD, $dboptions);
} catch (Exception $ex) {
   // echo($ex->getMessage());
    die;
}


//operations
$sql = "INSERT INTO `smstest` (name,mobile,msg,msg_id) 
                              VALUES ('$name','$numbr','$message','$output')";  //add '$output' on the basics ,msg_id.
try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
      // echo($ex->getMessage());
    }




// CREATE TABLE `smstest` (
//   `id` int(11) NOT NULL,
//   `name` varchar(255) NOT NULL,
//     `mobile` varchar(255) NOT NULL,
//     `msg` text(255) NOT NULL,
//     `msg_id` varchar(255) NOT NULL
//   ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
// ALTER TABLE `smstest`
//   MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

?>