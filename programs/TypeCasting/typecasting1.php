<?php

echo "Enter a float:";
$num=trim(fgets(STDIN, 1024));
$num1=(int) $num;
$num2=(string) $num;
echo "After converting float to integer, datatype: ";
echo gettype($num1);
echo "\tvalue is:$num1\n";
echo "After converting float to string, datatype: ";
echo gettype($num2);
echo "\tvalue is:$num2\n";


?>