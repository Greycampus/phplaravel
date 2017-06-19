<?php

echo "Enter number:";
$num=trim(fgets(STDIN, 1024));
$m=1;
$k=pow(2,$m);
while($num>$k)
{
        $m=$m+1;
        $k=pow(2,$m);
        $b=$k-1;
        $c=$k+1;
        
		if($num<$c || $num<$b)
			break;
	    else
	    {
	    	$n=IsPrime($b);
		    if ($n==1)
		     {
		      echo $b;
		      echo "\n";
		      }
		    $n=IsPrime($c);
		    if ($n==1)
		     {
				  echo $c;
				  echo "\n";
			 }
		}
 }


function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  

return 1;
   }
?>