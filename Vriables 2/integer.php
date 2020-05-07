<?php
$negative = -3; // negative
$zero = 0; // zero (can also be null or false (as boolean)
$positive = 123; // positive decimal
$zeroPos = 0123; //0 prefix is used to specify octal - octal value = 83 decimal
$hex = 0xAB; //0x prefix is used to specify hexadecimal - hexadecimal value = 171 decimal
$bin = 0b1010; // 0b prefix is used to specify binary - binary value = 10 decimal
var_dump($negative, $zero, $positive, $zeroPos, $hex, $bin); 
?>