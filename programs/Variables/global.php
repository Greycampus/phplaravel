<?php
   $pi = 3.14;
   
   function circle() {
      GLOBAL $pi;
      echo "Enter radius of the circle:";
      $r = trim(fgets(STDIN, 1024));
      $val = $pi*$r*$r;
      print "Area of the circle: $val\n";
   }
   
   circle();
?>
