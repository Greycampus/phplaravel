<?php

echo "Enter column number:";
$col1=trim(fgets(STDIN, 1024));
$col = $col1-1;
$file = fopen("sample.csv","r");
while(! feof($file))
{
    echo fgetcsv($file)[$col];
    echo "\n";
}

fclose($file);
?>