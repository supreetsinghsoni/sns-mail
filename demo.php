
<?php
$file = "User_Data/supreetsinghsoni@gmail.com/profile";
$f = fopen($file, 'r');
echo 'hi';
$line = fgets($f, 1000);

echo strpos($line, "Mobile:");
echo substr($line, 66,10);





?>

