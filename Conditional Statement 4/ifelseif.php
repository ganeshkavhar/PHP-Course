<?php
$score = 75; //change the value of score to see other results
if ($score > 100)
{ // If score is greater than 100
    echo "Error: the score is greater than 100!\n";
}
else if ($score < 0)
{ // Else If score is less than 0
    echo "Error: the score is less than 0!\n";
}
else if ($score >= 75)
{ // Else if score is greater or equal to 50
    echo "Distinction!\n";
}
else
{ // If none above, then score must be between 0 and 49
    echo "Fail!\n";
}
?>