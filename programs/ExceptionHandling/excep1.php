
<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}
function power($n) {
  $count=0;
  while ($n != 1)
  {
    if ($n%2 != 0)
    {
      $count=1;
    }
    else
      $n = $n/2;
  }

  if($count!=1){
     throw new Exception('powers of two');
  }
  else{
    echo 1/$x;
  }

}

try {
    echo inverse(0) . "\n";
} 
catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
try{
    
     echo power(256) . "\n";
}
catch (Exception $ee)
{
   echo 'Caught exception: ',  $ee->getMessage(), "\n";
}

?>
