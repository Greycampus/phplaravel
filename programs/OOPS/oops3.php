<?php

interface Shape {
  public function calcArea();
}
class Circle implements Shape {
  private $radius;
   
  public function __construct($radius)
  {
    $this -> radius = $radius;
  }
  
  // calcArea calculates the area of circles 
  public function calcArea()
  {
    return $this -> radius * $this -> radius * pi();
  }

  public function f2()
  {
  	echo "2\n";
  }
}

class Rectangle implements Shape {
  private $width;
  private $height;
   
  public function __construct($width, $height)
  {
    $this -> width = $width;
    $this -> height = $height;
  }
  
  // calcArea calculates the area of rectangles   
  public function calcArea()
  {
    return $this -> width * $this -> height;
  }

  function f2($rect) //overriding function f2
   {
    echo $rect;
   }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea()."\n";
echo $rect -> calcArea()."\n";
$rect->f2("bhavana");

?>