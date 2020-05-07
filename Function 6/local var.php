<?php
function cube($num1)
{ //num1 parameter passed by value here
    return $num1 * $num1 * $num1; //cube of num1 returned
    
}

$answer = cube(3); //function cube called with 3 passed as the argument
echo $answer;
?>