<?php

echo "Enter a number:";
$num=trim(fgets(STDIN, 1024));
echo factorial($num);
echo "\n";
function factorial($number) { 

    if ($number < 2) { 
        return 1; 
    } else { 
        return ($number * factorial($number-1)); 
    } 
}

?>