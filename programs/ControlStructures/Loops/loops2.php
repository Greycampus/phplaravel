<?php
echo "Enter k value:";
$k= trim(fgets(STDIN, 1024));
echo "Enter s value:";
$s= trim(fgets(STDIN, 1024));
for ($i=0; $i < $k; $i++) {
    # code...
    echo str_pad(str_repeat(chr(65+$i),(2*$i+1)),$s,'-',STR_PAD_BOTH);
    echo "\n";
}
for ($i=1; $i < $k; $i++) {
    # code...
    echo str_pad(str_repeat(chr(65+$k-$i-1),(2*($k-$i)-1)),$s,'-',STR_PAD_BOTH);
    echo "\n";
}
?>