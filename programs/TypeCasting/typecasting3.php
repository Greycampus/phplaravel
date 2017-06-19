<?php

echo "Enter a string:";
$str = trim(fgets(STDIN, 1024));
echo "Enter a number:";
$num= trim(fgets(STDIN, 1024));
$str = str_replace(' ', '', $str);
$arr1 = str_split($str, $num);
print_r($arr1);

?>
