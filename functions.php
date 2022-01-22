<?php

declare(strict_types=1);

// when we declare the namespace, it means we have to write the namespace too wherever we have
// to include the file, otherwise phpstorm does autocompletes for all the php files present in 
// the project, but that's not functional without including actual file in the index file
// or wherever we want to include the php file, remember the autoloader concept while using the namespaces and incldues

// function to define pass by value and pass by reference
function addValues(int $firstValue, int $secondValue): int {
    return $firstValue + $secondValue;
}

// this function parameter is used : call by reference
function incrementByTen(&$variable): int {
    $variable += 10;
    return $variable;
}

// this function uses : call by reference too
// will change the actual string variable
function changeString(string &$string): string {
    $string = "___NOW THIS STRING IS THIS_______";
    return $string;
}

function incrementByHundred(int &$variable): int {
    // if we do like this, this wont increment by 100
    // return $variable + 100;
    // we have to store the incremented value to $variable too
    $variable += 100;
    return $variable;
}

// this function will print the formatted array
function printFormattedArray($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre>";
}

// strict types is enabled

function show(string $str, int $number, bool $isTrue): string {
    return "the string _________ $str and $number __________ and and and $isTrue";
}


// when the strict types is enabled, the line show error, when is disabled, the error is shown at compile time
//echo show(3423, "steadfast", 45);

// NOTE : ONLY VARIABLES CAN BE PASSED BY REFERENCE
// NOTE : CONSTANTS CANNOT BE PASSED BY REFERENCE


