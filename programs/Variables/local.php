<?php
   $num = 2;
   
   function local1() {
      echo "Enter a number:";
      $num = trim(fgets(STDIN, 1024));
      print "local num value: $num\n";
       $m=0;
       $n=pow(3,$m);

      while($num>=$n)
      {
        $m=$m+1;
        $n=pow(3,$m);
      }
      $val1=pow(3,$m)-$num;
      $val2=$num-pow(3,($m-1));
      if($val1<$val2)
      {
        $sol=pow(3,$m);
      }
      else
      {
        $sol=pow(3,($m-1));
      }

      print "Nearest power of 3: $sol\n";
   }
   local1();
   print "golbal num value: $num\n";

?>
