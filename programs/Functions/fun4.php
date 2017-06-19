<?php
echo "Enter votes:";
$str=trim(fgets(STDIN, 1024));
$strArray = count_chars($str,1);
$i=0;
foreach ($strArray as $key=>$value)
   {
     $array[$i][0]=$value;
     $array[$i][1]=chr($key);
     $i++;
   }
  rsort($array);
  echo $array[0][1]." wins with ".$array[0][0]." votes\n";
 
?>