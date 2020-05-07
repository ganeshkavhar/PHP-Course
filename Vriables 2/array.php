<?php
$foo = array(1, 2, 3); // An array of integers created using array fucntion
$bar = ["A", true, 123 => 5]; // Short array syntax, PHP 5.4+
echo $bar[0]; // Returns "A"
echo "\n";
echo $bar[1]; // Returns 1 for true
echo "\n";
echo $bar[123]; // Returns 5
// echo $bar[1234]; // uncommenting this line will give an error because 1234 is inaccessable
?>