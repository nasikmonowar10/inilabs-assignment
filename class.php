<?php 
class Shape{
    public $length;
    public $width;
    public $area;
    public $radius;

  
}
class Circle extends Shape{

    public function __construct ($radius){
        $this->radius = $radius;
    }
    public function circlearea(){
        return pi()*pow($this->radius, 2);
    }
}
class Rectangle extends Shape {
        
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function rectanglearea() {
        return $this->length * $this->width;
    }
}
$circle = new Circle(7);
$circleArea = $circle->circlearea();
echo "Circle Area: " . $circleArea . "\n";
echo "<br>";

$rectangle = new Rectangle(3, 5);
$rectangleArea = $rectangle->rectanglearea();
echo "Rectangle Area: " . $rectangleArea . "\n";

?>

