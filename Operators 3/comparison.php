<?php
$a = '4';
$b = '4';
if ($a == $b)
{
    echo 'a and b are equal'; // this will be printed
    
}
if ($a === $b)
{ //try removing one = and see what happens
    echo 'a and b are identical'; // this won't be printed
    
}
?>