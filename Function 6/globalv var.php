<?php

$num1 = 5;
$num2 = 2;

function multiply(){
  global $num1; // Accessing global variables from function scope requires this explicit statement
  global $num2;
  $answer = $num1*$num2;
  return $answer;
}

// When in the global scope, regular global variables can be used
// without explicitly stating 'global $variable;'
echo "num1 is: $num1\n";
echo "num2 is: $num2\n";
echo multiply();
?>