<?php
$user=$_SESSION['user'];
if(isset($_POST['send']))
{
	$to=$_POST['to'];
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
        $file=$_POST['file'];
	if(file_exists("User_Data/$to"))
	{
	//for receiver
	$subj=$user." ".$sub;
	$fo=fopen("User_Data/$to/inbox/$subj","w");
	fwrite($fo,$msg);
	//for sender
	$subj1=$to." ".$sub;
	$fo1=fopen("User_Data/$user/sent/$subj1","w");
	fwrite($fo1,$msg);
	$err="<font color='green'>Message Successfully Send</font>";

/*$name=$_FILES["file"]["name"];

$tmp_name=$_FILES["file"]["tmp_name"];

 
$location="User_Data/$user";
move_uploaded_file($tmp_name,$location.$name); */


 /*$target_dir = "User_Data/$user";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check file size
if ($_FILES["file"]["size"] > 52428800) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
//move_uploaded_file($_FILES['img']['tmp_name'],"User_Data/$e/".$_FILES['img']['name']);
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["name"], $target_file)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
*/


	}
	else
	{
	// for receiver
	//for receiver
	$subj=$to." ".$sub."Message Failed";
	$fo=fopen("User_Data/$user/inbox/$subj","w");
	fwrite($fo,$msg);
	// for sender
	$subj1=$to." ".$sub;
	$fo1=fopen("User_Data/$user/sent/$subj1","w");
	fwrite($fo1,$msg);
	$err="<font color='green'>Message Failed</font>";
	}
}
if(isset($_POST['save']))
{
	$sub=$_POST['sub'];
	$msg=$_POST['msg'];
	$subj=$user." ".$sub;
	$fo=fopen("User_Data/$user/draft/$subj","w");
	fwrite($fo,$msg);
	$err="<font color='blue'>Message Successfully Save</font>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>User Free Write Your message</title>
<style>
input{width:500px;border-radius:10px;background-color:white;color:black}
textarea{border-radius:10px;background-color:white;color:black}
input[type=submit]:hover{background:white}
input[type=reset]:hover{background:white}
input[type=submit]{width:100px}
input[type=reset]{width:100px}
</style>
</head>
<body>
<table border="" width="100%" height="100%" align="center" bgcolor="#999999">
<form method="post" enctype="multipart/form-data">
			<tr>
				<td colspan="2" align="center"><?php echo @$err;?></td>
			</tr>
			<tr>
				<td width="57">To :</td>
				<td width="447"><input type="email" placeholder="abc@gmail.com" name="to"></td>
			</tr>
			<tr>
				<td>Subject :</td>
				<td><input type="text" placeholder="Enter Your Subject" name="sub"></td>
			</tr>
			<tr>
				<td>Message :</td>
				<td><textarea placeholder="Write Your Message" rows="25" cols="70" name="msg"></textarea></td>
			</tr>
                      
			<tr>
				<td colspan="2" align="center"><input type="submit" value="Send" name="send"/>
				<input type="submit" value="Save" name="save">
				</td>
			</tr>
</form>
</table>			
</body>
</html>
