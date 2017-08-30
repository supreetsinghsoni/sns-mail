<?php
session_start();
$user=$_SESSION['user'];
if($_SESSION['user']=="")
{
header('location:index.php');
}
else
{
error_reporting(0);
$pExt=array('jpg','png','jpeg','bmp','gif');
$sc=opendir("User_Data/$user");
while($file=readdir($sc))
{	
	if($file!='.' && $file!='..')
	{
		$filedata=pathinfo($file);
		if(in_array($filedata['extension'], $pExt))
		{
		$img=$filedata['basename'];
		//print_r($filedata);
		}
		
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>SNS MAIL</title>
<style>
body{margin-top:-2px}
table{margin:auto}

a{border-radius:8px;text-decoration:none;margin-left:2%;font-size:16px}
a:hover{color:black;background:black;padding:5px}
img{margin-top:-1px;margin-bottom:-5px}
</style>
</head>
<body style="background-image:url('theme/<?php
		@$conTheme=$_REQUEST['thm'];
		if($conTheme)
		{
			$fo=fopen("User_Data/$user/theme","w");
			fwrite($fo,$conTheme);
		}
		@$f=fopen("User_Data/$user/theme","r");
		@$fr=fread($f, filesize("User_Data/$user/theme"));
		echo $fr;
		?>');
		">
<form method="post">
<table width="80%" height="100%" border="0" bordercolor="black" cellpadding="0" cellspacing="0" align="left">
  <tr style="background-color:black">
    <td height="30" colspan="2">
        <span style="color:#ffffff">Welcome <?php echo @$_SESSION['user'];?></span>
		<span  style="margin-left:30%"><a href="home.php"style="color:#ffffff">Home</a></span>
		
		<span><a href="home.php?option=set"style="color:#ffffff">Setting</a></span>
		<span><a href="logout.php"style="color:#ffffff">Logout</a></span> 
		 
		</td>
  </tr>
  <tr>
    <td height="119" colspan="2" style="background-color:black">
	<span><?php echo "<img src='User_Data/$user/$img' height='119px'/>";?></span>
	    <span style="margin-left:45%"><a href="home.php?option=edit"><font color=#ffffff>Edit_Profile</font></a>
	<a href="home.php?option=pass"><font color=#ffffff>Change_Password</font></a>
	<a href="home.php?option=theme"><font color=#ffffff>Change_Themes</font></a>	
	</span>

	</td>
  </tr>
  <tr>
    <td width="198" align="center" valign="top" style="background-color:black;padding:10px">
	<a href="home.php?option=compose"><font color=#ffffff>COMPOSE</font></a><br/><br/>
	<a href="home.php?option=inbox"><font color=#ffffff>INBOX</font></a><br/><br/>
	<a href="home.php?option=sent"><font color=#ffffff>SENT</font></a><br/><br/>
	<a href="home.php?option=draft"><font color=#ffffff>DRAFT</font></a><br/><br/>
	<a href="home.php?option=spam"><font color=#ffffff>SPAM</font></a><br/><br/>
	<a href="home.php?option=trash"><font color=#ffffff>TRASH</font></a><br/>
	</td>
	<td width="878" height="516" valign="top" style="background-color:#ffffff">
	<?php
	@$opt=$_GET['option'];
	switch($opt)
	{
	case 'edit';
	include('editprofile.php');
	break;
	case 'pass';
	include('changepassword.php');
	break;
	case 'theme';
	include('changetheme.php');
	break;
	case 'admin';
	include('admin.php');
	break;
	case 'compose';
	include('compose.php');
	break;
	case 'inbox';
	include('inbox.php');
	break;
	case 'sent';
	include('sent.php');
	break;
	case 'draft';
	include('draft.php');
	break;
	case 'spam';
	include('spam.php');
	break;
	case 'trash';
	include('trash.php');
	break;
	case 'set';
	include('setting.php');
	break;
	}
	//for inbox
	$coninb=$_GET['coninb'];
		if(isset($coninb))
		{
		$fo=fopen("User_Data/$user/inbox/$coninb","r");
		$filesize=filesize("User_Data/$user/inbox/$coninb");
		$msg=fread($fo,$filesize);
		echo $msg;
		}
	//for sent
		$consent=$_GET['consent'];
		if(isset($consent))
		{
		$fo=fopen("User_Data/$user/sent/$consent","r");
		$filesize=filesize("User_Data/$user/sent/$consent");
		$msg=fread($fo,$filesize);
		echo $msg;
		}
		//for trash
		$contrsh=$_GET['contrs'];
		if(isset($contrsh))
		{
		$fo=fopen("User_Data/$user/trash/$contrsh","r");
		$filesize=filesize("User_Data/$user/trash/$contrsh");
		$msg=fread($fo,$filesize);
		echo $msg;
		}
		//for trash
		$condrft=$_GET['condrft'];
		if(isset($condrft))
		{
		$fo=fopen("User_Data/$user/draft/$condrft","r");
		$filesize=filesize("User_Data/$user/draft/$condrft");
		$msg=fread($fo,$filesize);
		echo $msg;
		}
		//for spam
		$conspam=$_GET['conspam'];
		if(isset($conspam))
		{
		$fo=fopen("User_Data/$user/draft/$conspam","r");
		$filesize=filesize("User_Data/$user/draft/$conspam");
		$msg=fread($fo,$filesize);
		echo $msg;
		}
	?>	</td>
  </tr>
  <tr>
    <td colspan="2" align="center"><b>Developed By @Supreet and Shivam </b></td>
  </tr>
  </form>
</table>
</body>
</html>
<?php
}
?>
