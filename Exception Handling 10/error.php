<?php
// Set a safe environment:
error_reporting(-1);

// Maps errors to ErrorException.
function my_error_handler($errno, $message)
{ throw new ErrorException($message); }

try {
    echo 1/0;
}
catch(ErrorException $e){
    echo "got $e";
}
?>