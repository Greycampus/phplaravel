<?php

echo "Enter 'a' value:";
$a=trim(fgets(STDIN, 1024));
echo "Enter 'r' value:";
$r=trim(fgets(STDIN, 1024));
echo "Enter a number:";
$num=trim(fgets(STDIN, 1024));
$gp=$a;

while($num>$gp)
{
	if ($r==1 && $num!=$a)
 {
 	break;
 }
	$gp=$gp*$r;
}
if($num==$gp)
echo "yes \n";
else
echo "no\n";


?>