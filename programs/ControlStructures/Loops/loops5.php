<?php

echo "Enter a number:";
$n=trim(fgets(STDIN, 1024));
for($j=0; $j<$n; $j++)
{ 
  for($i=0; $i<=$j; $i++)
{
    echo "1";
    }
    echo "\n";
}

?>