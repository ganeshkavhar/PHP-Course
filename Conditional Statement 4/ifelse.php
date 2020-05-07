<?php
$a = 50; //change the value of "a" so its less than b in order to execute the else statement
$b = 15;
if ($a > $b)
{
    //this code is executed only if $a is greater than $b
    echo "a is greater than b";

}
else
{
    //this code is executed if the preceding "if" condition evaluated to false
    echo "a is less than b";
}
?>