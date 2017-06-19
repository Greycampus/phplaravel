<?php

$array=array(1,-2,1);
echo "equation is x2-2x+1\n";
$val1=2*$array[0];
$val2=-1*$array[1];
$sol=$val2/$val1;
if($sol<0)
	echo "minima is:".$sol."\n";
else
	echo "maxima is:".$sol."\n";

?>