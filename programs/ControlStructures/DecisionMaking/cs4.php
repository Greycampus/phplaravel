<?php

echo "Enter a year:";
$year=trim(fgets(STDIN, 1024));
if($year%4 == 0)
    {
        if( $year%100 == 0)
        {
            if ( $year%400 == 0)
                echo "Leap year\n";
            else
                echo "Not a leap year\n";
        }
        else
            echo "Leap year\n";
    }
    else
        echo "Not a leap year\n";;

?>