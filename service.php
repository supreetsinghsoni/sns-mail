<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
 


<title>SAYS</title>
</head>

<body >

</div>


 
    <form name="enquiry" action="booked.php" method="POST" enctype="multipart/form-data">
    
    Your name:<br>
    <input name="name" type="text" value="" size="30" required /><br>
    
    Your roll number:<br>
    <input name="rollnumber" type="text" value="" size="300"required /><br>
    Your room number:<br>
    <input name="roomnumber" type="text" value="" size="30"required /><br>
     Your problem description:<br>
    <input name="problem" type="text" value="" size="30"required /><br>
    
    
    <input type="submit" value="Book"    >
    </form>


<p>&nbsp;</p>
            
      
<hr>


</body>


</html>








