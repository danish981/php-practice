<?php

// php warning error, does not stop execution of php script
// it only warns you about the error
// the error that is going to be big problem later

// it comes when we include file that does not exists
// or give wrong paramters to the function, i think??

include("invalidFile.php");

function getValue(int $value, int $anotherValue): int {
    return random_int($value, $anotherValue);
}

getValue("something stupied", "something another stupid");

?>