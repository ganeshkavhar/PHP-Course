<?php
$i = 1;
echo $i . "\n"; // Prints 1
// Pre-increment operator increments $i by one, then returns $i
echo ++$i . "\n"; // Prints 2
// Pre-decrement operator decrements $i by one, then returns $i
echo --$i . "\n"; // Prints 1
// Post-increment operator returns $i, then increments $i by one
echo $i++ . "\n"; // Prints 1 (but $i value is now 2)
// Post-decrement operator returns $i, then decrements $i by one
echo $i-- . "\n"; // Prints 2 (but $i value is now 1)

?>