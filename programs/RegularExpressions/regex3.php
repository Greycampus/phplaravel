<?php
$string= 'fhgkiug*[!*]jhmb*[!*]';
$new_str = preg_replace('~[[][!][*][]]~', "5", $string);

echo $new_str;
?>