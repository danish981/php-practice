<?php
/**
 * Created by PhpStorm.
 * User: Danish
 * Date: 3/6/2021
 * Time: 5:35 AM
 */

// this is just a demo file, dont worry about it

function getRandomValue(int $lowerValue, int $upperValue): int {
    return rand($lowerValue, $upperValue);
}

function getAnotherValue(int $lowerLimit, int $upperLimit): int {
    return random_int($lowerLimit, $upperLimit);
}

echo getRandomValue(45, 50);



