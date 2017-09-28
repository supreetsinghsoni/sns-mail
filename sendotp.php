<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
// Start the session
session_start();

// Set session variables
$_SESSION["number"] =  $_POST["phone"];

// generate OTP
		$otp = rand(100000,999999);
$_SESSION["otp"] =  $otp;

include('way2sms-api.php');
     
     $message= 'hi';
      $res = sendWay2SMS ( '9781596370' , 'jacknjones' , $_SESSION["number"], $_SESSION["otp"]); 

include 'otp.php';



//exec ( "sms.py $_SESSION["number"] $_SESSION["otp"] " );

 ?>
