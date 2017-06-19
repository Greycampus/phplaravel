<?php

echo "Enter a number:";
$num=trim(fgets(STDIN, 1024));
$sum=0;
$temp=$num;
  while($temp!=0)
  {
    $rem=$temp%10;
    $sum=$sum+$rem*$rem*$rem;
    $temp=$temp/10;
  }

 if($num==$sum)
 {
   echo "Armstrong number\n";
 }
 else
 {
  echo "not an armstrong number\n";
 }

?>