<?php

$array=array(1,4,2,-1);
echo "equation is x3 + 4x2 + 2x - 1\n";
$val1=3*$array[0];
$val2=2*$array[1];
$val3=1*$array[2];
echo "After derivating:".$val1." x^2+".$val2." x+".$val3."\n";

$val1=$array[0]/4;
$val2=$array[1]/3;
$val3=$array[2]/2;
$val4=$array[3]/1;
echo "After integrating:".$val1." x^4+".round($val2,2)." x^3+".$val3." x^2+".$val4." x+C\n"

?>