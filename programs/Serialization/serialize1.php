 <?php 

echo "Enter size of array:";
$s= trim(fgets(STDIN, 1024));
$l=$s+1;
$array = new SplFixedArray($l);
for( $i = 0; $i<=$s; $i++ )
 {
    $array[$i]=$i;
 }
$serialized_data = serialize($array);  
echo  $serialized_data."\n";  
 
 ?>  