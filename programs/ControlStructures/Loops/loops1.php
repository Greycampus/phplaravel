<?php

$k=trim(fgets(STDIN, 1024));
$l=trim(fgets(STDIN, 1024));
$h=trim(fgets(STDIN, 1024));
$d=trim(fgets(STDIN, 1024));

echo "enter valuef for ".$k."mediums:";
$array = new SplFixedArray($k);
for( $i=0;$i<$k;$i++ )
 {
    $array[$i]=trim(fgets(STDIN, 1024));
 }
 $hl=5;
 $hll=0;
 $sum=0;
for($i=0;$i<$k;$i++)
{
	$count=0;
	$hll=0;
	while($hll!=$l)
	{

		$hl=$hl*(1-$array[$i]);
		$hl=(int) $hl;
		$sum=$sum+$d;
		if($hl!=0)
		{
			$count=$count+1;
			$hll=$count*$d;
			
	    }
	    else{
	     echo $sum;
	     return 0;
	    }
	
    }
}

?>