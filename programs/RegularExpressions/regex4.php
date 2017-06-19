<?php


echo "Enter paragraph:";
$paragraph=trim(fgets(STDIN, 1024));
echo "Enter substring starting with / and ending with /:";
$string=trim(fgets(STDIN, 1024));


if (preg_match_all($string, $paragraph, $matches)) {
  echo count($matches[0]) . " matches found";
}else {
  echo "match not found";
}

?>