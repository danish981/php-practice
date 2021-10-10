<?php

// when we declare the namespace, it means we have to write the namespace too wherever we have
// to include the file, otherwise phpstorm does autocompletes for all the php files present in 
// the project, but thats not functional without including actual file in the index file
// or wherever we want to incldue the php file, remember the autoloader concept while using the namespaces and incldues

// function to define pass by value and pass by reference
function addValues(int $firstValue, int $secondValue): int {
    return $firstValue + $secondValue;
}

// this function paramter is used : call by reference
function incrementByTen(&$variable) {
    $variable += 10;
    return $variable;
}

// this function uses : call by reference too
// will change the actual string variable
function changeString(string &$string) {
    $string = "___NOW THIS STIRNG IS THIS_______";
    return $string;
}

function incrementByHundred(int &$variable) {
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








// NOTE : ONLY VARIABLES CAN BE PASSED BY REFENCE
// NOTE : CONSTANTS CANNOT BE PASSED BY REFERENCE


