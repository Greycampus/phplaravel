<?php

echo "Enter number of students:";
$stud=trim(fgets(STDIN, 1024));
$array = new SplFixedArray(3);
$array1=new SplFixedArray($stud);
$k=1;
for($i=0;$i<$stud;$i++)
{
 $array1[$i]=0;
 echo "Enter marks of student $k:\n";
 for( $j=0;$j<3; $j++ )
 {
    $array[$j]=trim(fgets(STDIN, 1024));
    $array1[$i]=$array1[$i]+$array[$j];
 }
 $array1[$i]=($array1[$i]/3);
 $k=$k+1;
 
}
 
 echo "Enter student for percentage:";
 $st=trim(fgets(STDIN, 1024));
 $st=$st-1;
 echo "$array1[$st]\n";

?>