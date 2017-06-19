<?php
$marks = array
(
  array("rag" ,77),
  array("teja", 89),
  array("bhavana", 84),
  array("praveen", 77),
  array("bhadram", 75)
);
for ($i = 0; $i < 5; ++$i)
    {
        for ($j = $i + 1; $j < 5; ++$j)
        {
            if ($marks[$i][1] > $marks[$j][1])
            {

                $a =  $marks[$i][1];

                $marks[$i][1] = $marks[$j][1];

                $marks[$j][1] = $a;
               
                $a =  $marks[$i][0];

                $marks[$i][0] = $marks[$j][0];

                $marks[$j][0] = $a;
            }

        }

}
$i=1;
$g=0;
if($marks[0][1]!=$marks[$i][1])
{
   
   $array[$g]=$marks[$i][0];
   $g++;
   echo "\n";
   while($marks[$i][1]==$marks[$i+1][1])
   {
      $array[$g]=$marks[$i+1][0];
      $i++;
      $g++;
   }
}
sort($array);
foreach( $array as $value ) 
 {
    echo $value." ".$marks[1][1]."\n";
 }

?>         