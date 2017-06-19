<?php
$string = file_get_contents("email.txt");
$pattern = '/[a-z0-9_\-\+]+@[a-z0-9\-]+\.([a-z]{2,3})(?:\.[a-z]{2})?/i';
preg_match_all($pattern, $string, $matches);
var_export($matches[0]);
?>