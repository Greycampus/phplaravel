<?php

echo "Enter values of a,b,c in quadratic equation :";
$a=trim(fgets(STDIN, 1024));
$b=trim(fgets(STDIN, 1024));
$c=trim(fgets(STDIN, 1024));
$r=$b*$b-4*$a*$c;
function quad($r)
{
 
 if($r<0)
 	throw new Exception('complex roots');
}
try{
	echo quad($r);
}

catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}



?>