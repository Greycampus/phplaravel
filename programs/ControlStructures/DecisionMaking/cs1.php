<?php

echo "Enter a number:";
$num = trim(fgets(STDIN, 1024));
if($num%2!=0 && $num%9==0)
{
	echo "$num is odd and multiple of 9\n";
}
else
{
	 if($num%2!=0)
	 {
	 	echo "$num is odd but not a multiple of 9\n";
	 }
	 elseif($num%9==0)
	 {
	 	echo "$num is not odd but multiple of 9\n";
	 }
	 else
	 {
	 	echo "$num is not odd and not a multiple of 9\n";
	 }
}

?>