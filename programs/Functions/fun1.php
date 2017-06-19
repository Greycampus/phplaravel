<?php

echo "Enter two numbers:";
$m=trim(fgets(STDIN, 1024));
$n=trim(fgets(STDIN, 1024));
echo gcd($m,$n);
echo "\n";

function gcd($x, $y)
{
   $x = abs($x);
   $y = abs($y);
   if($x + $y == 0)
   {
     return "0"; 
   }
   else
   {
    while($x > 0)
    {
     $z = $x;
     $x = $y % $x;
     $y = $z;
    }
     return $z;
   }
 }

?>
