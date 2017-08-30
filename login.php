<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Login Page</title>
<?php
if(isset($_POST['l']))
{
	$email=$_POST['e'];
	$pass=$_POST['p'];
	if(file_exists("User_Data/$email") && file_exists("User_Data/$email/$pass"))
	{
	$_SESSION['user']=$email;
	//header('location:home.php');
	echo "<script>window.location='home.php'</script>";
            


$file = "User_Data/".$email."/profile";
$f = fopen($file, 'r');

$line = fgets($f, 1000);

$position=strpos($line, "Mobile:");
$position=$position + 7;
$mobile=substr($line, $position,10);

$_SESSION['mobile']=$mobile;







    
   



include('way2sms-api.php');
     
       $message= 'you have been logged in - snsmail team';
       $res = sendWay2SMS ( '9781596370' , 'jacknjones' , $mobile , $message); 
         
	}
	else
	{
	echo "<h1 align='center'><font color='green' face='cursive'>Invalid User</font></h1>";
	}
	
}
@$ot=$_GET['fpassw'];
echo $ot;
switch($ot)
	{
	case 'fpass';
	include('forgot.php');
	break;
	}
?>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<table width="403" border="0"cellspacing="10">
  <tr>
    <td width="147">Enter Your Email Id</td>
    <td width="222"><input type="email" placeholder="abc@gmail.com" name="e" required/></td>
  </tr>
  <tr>
    <td>Enter Your Password</td>
    <td><input type="password" placeholder="Your Password" name="p" required/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" value="Login" name="l"/>
	<a  href="index.php?option=fpass" > <font color="black">Forgot Password</font></a></td>
  </tr>
</table>
</form>
</body>
</html>
