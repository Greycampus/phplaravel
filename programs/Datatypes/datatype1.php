<?php
$val1 = 7;      //integer
$val2 = 5.89;   //double
$val3 = trim(fgets(STDIN, 1024));   //string
echo gettype($val1), "\n";
echo gettype($val2), "\n";
echo gettype($val3), "\n";
?>