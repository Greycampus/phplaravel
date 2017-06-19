
<?php
$array=array(2,4,6,8,10);
$array1=array(3,6,9,12,15);

 echo "Multiples of two:\n";              
$arrayobject = new ArrayObject($array);

for($iterator = $arrayobject->getIterator();
    $iterator->valid();
    $iterator->next()) {

    echo $iterator->current() . "\n";
}

 echo "Multiples of three:\n";  
               
$arrayobject = new ArrayObject($array1);

for($iterator = $arrayobject->getIterator();
    $iterator->valid();
    $iterator->next()) {

    echo $iterator->current() . "\n";
}
?>
