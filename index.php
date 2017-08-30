<?php session_start(); ?>

</center>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script data-cfasync='false' type='text/javascript' src='//p224086.clksite.com/adServe/banners?tid=224086_421968_0&tagid=2'></script>
<title>SNS MAIL</title>
<style>
body{margin-top:-2px}
table{margin:auto;}

a{border-radius:10px;text-decoration:none;margin-left:6%;font-size:25px;font-style:italic}


a:visited
{
color:black;
text-decoration:none;
font-weight:bold;
background:black;
}
a:hover{color:black;background:black}
a:active{color:black;background:black}
</style>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tr>
    <td height="165" colspan="2" bgcolor="black" style="background-image:url(image/logo1.JPG)"><h1 align="center"><font color="white" face="cursive">SNS MAIL</h1></td>
  </tr>
  <tr >
    <td height="42" colspan="2" bgcolor="black">
	<a href="index.php"><font color=#ffffff>HOME</font></a>
        <a href="index.php?option=registration"><font color=#ffffff>REGISTRATION</font</a>
	<a href="index.php?option=login"><font color=#ffffff>LOGIN</font></a>
        <a href="index.php?option=about"><font color=#ffffff>ABOUT</font></a>
	<a href="index.php?option=contact"><font color=#ffffff>CONTACT</font></a>
	</td>
  </tr>
  <tr>
    <td width="801" height="450" valign="top" bgcolor="">
	<?php
	@$opt=$_GET['option'];
	//echo $opt;
	if($opt=="")
	{
	?>
	
	<p style="margin-left:30px; padding-top:30px; margin-right:30px; line-height:2; ">This project provides services to exchange or transfer the electronic-mail using file system concept. To hold data we are using only file system instead of database. This project works like gmail system. User information is stored inside various directories. Registration page is provided to enter the user details. Details are stored inside the directory using file system concept. Session is used to hold the particular user details each time when a new user login or registration. Login Page permits only existing user to login to the mail-server page. Compose is used to sent mail whose email address is matched with existing user in database,compose and hit send and mail is sent to recipient. All received mails are collected in inbox. Draft is to hold the copy of the mail which is to be sent. Copy of the sent mail is stored in the sent. User can also change the password by first checking the existing password(old password), then new-password and confirm password must match each other. It will replace old password with new password. Now user can login with new generated password.</p>
	
	<br/>
	<?php
	}
	else
	{
	switch($opt)
	{
	case 'login';
	include('login.php');
	break;
	case 'about';
	include('about.php');
	break;
	case 'service';
	include('services.php');
	break;
	case 'registration';
	include('regis.php');
	break;
	case 'contact';
	include('contact.php');
	break;
	case 'fpass';
	include('forgotpass.php');
	break;
	}
	}
	?>
	</td>
    
  </tr>
<tr>
    <td colspan="2" align="center"><b>Developed By @Supreet and Shivam</b> </td>
  </tr>
  
</table>
</body>
</html>