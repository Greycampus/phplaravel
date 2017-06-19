<?php

$myFile = "hello.txt";
$lines = file($myFile);
echo "Enter line number:";
$l=trim(fgets(STDIN, 1024));
$li=$l-1; 
$no_of_lines = count(file($myFile)); 
if($no_of_lines<$l)
echo "line does not exist"; 
else
echo $lines[$li]; 

?>