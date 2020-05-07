<?php
class Shape
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.";
    }

}

$myShape = new Shape("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides

?>