<?php

echo "Enter size of array:";
$s= trim(fgets(STDIN, 1024));
$array = new SplFixedArray($s);
echo "Enter values:";
 for( $i = 0; $i<$s; $i++ )
 {
    $array[$i]=trim(fgets(STDIN, 1024));
 }
 foreach( $array as $value ) 
 {
    echo "Value is $value \n";
 }
 
?>
