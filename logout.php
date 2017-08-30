<?php
session_start();
$mobile = $_SESSION['mobile'];

include('way2sms-api.php');
     
       $message= 'you have been logged out - snsmail team';
       $res = sendWay2SMS ( '9781596370' , 'jacknjones' , $mobile , $message); 
         






unset($_SESSION['user']);
unset($_SESSION['mobile']);
header('location:index.php');
?>
