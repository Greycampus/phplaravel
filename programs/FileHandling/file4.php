<?php

$fp1 = fopen("hello.txt", 'a+');
$file2 = file_get_contents("hello1.txt");
fwrite($fp1, $file2);
$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("hello.txt"));
echo "\n";
fclose($myfile);

?>