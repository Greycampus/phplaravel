<?php

$str = '1A2wq1acef31sdac4';
echo "The string is:".$str."\n";
$str = preg_replace('/\D/', '', $str);
echo "The numbers in the string:".$str."\n";
$num=$str;
$sum=0;
while ($num > 0)
  {
    $digit = $num % 10;
    $sum  = $sum + $digit;
    $num /= 10;
  }
 echo "Sum of the digits in the string is:".$sum."\n";

?>