<?php
class Shape{
  public $sides = 0; // first property
  public $name= " "; // second property 
  
  public function description(){ //first method
    echo "A $this->name with $this->sides sides.";
  }
}
?>