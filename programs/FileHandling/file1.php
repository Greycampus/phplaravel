<?php
$myfile = fopen("hellow.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hello.txt"));
echo "\n";
fclose($myfile);
?>