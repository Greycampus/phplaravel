<?php

echo "Enter secret number:";
$sec=trim(fgets(STDIN, 1024));
echo "\n";
$arr1 = str_split($sec);
echo "You have three chances, enter 4 digit number:\n";
for($i=0;$i<3;$i++)
{
    $g=trim(fgets(STDIN, 1024));
    $arr2=str_split($g);
    if($arr1==$arr2)
    {
        echo "You Won..\n";
        return 0;
    }
    else
    {
        for($j=0;$j<4;$j++)
        {
            $sam=$arr2[$j];
            $pos = strpos($sec, $sam);

            if($pos==true && $arr1[$j]!=$arr2[$j] )
                $arr3[$j]="-";

            elseif($arr1[$j]==$arr2[$j])
             {
                $arr3[$j]="+";
             }

             else
                $arr3[$j]=" ";
        }
        
        for($k=0;$k<4;$k++)
        {
            echo $arr3[$k];
        }
        
      echo "\nTry again\n";
    }
}
echo "Better luck next time\n";

?>