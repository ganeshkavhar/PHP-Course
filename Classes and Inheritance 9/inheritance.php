<?php
class Shape
{ //base class
    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //base class constructor
        $this->sides = $sides;
        $this->name = $name;
    }

    public function description()
    {
        return "A $this->name with $this->sides sides.";
    }
}

class Square extends Shape
{ //derived class inheriting from base class
    public $sideLength = 0;

    public function __construct($sideLength)
    {
        parent::__construct("square", 4); //calling parent class constructor
        $this->sideLength = $sideLength;
    }

    public function perimeter()
    {
        return $this->sides * $this->sideLength;
    }

    public function area()
    {
        return $this->sideLength * $this->sideLength;
    }
}

$mySquare = new Square(10);
$mySquare->description();
echo "Perimeter of the square is " . $mySquare->perimeter() . "\n";
echo "Area of the square is ";
echo $mySquare->area();
?>