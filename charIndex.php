<?php

include("myAutoLoad.php");

use Utils\Functions;

include("classes/Functions.php");

Functions::printFormattedArray(hash_algos());

/**
 * @throws Exception
 */
function getAnotherValue(int $lowerLimit, int $upperLimit): int {
    return random_int($lowerLimit, $upperLimit);
}
