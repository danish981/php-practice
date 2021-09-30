<?php

//a usedful function used in many times everywhere
function line_break() {
    echo "<br>________________________________________________________________________<br>";
}

// a useful function
function print_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre>";
}

line_break();

echo "<br>we will learn associative arrays";

$ages = array(
    "bill" => 34,
    "steve" => 43,
    "elon" => 32,
    "einstein" => 44        //at last element, we will not put the comma , colon or semicolon
);

print_array($ages);

line_break();

//we can define array in a new style, and we can use mix values and keys too
$ranges = [
    //keys ----- values
    "ghouri" => 45000,
    "hataf" => "320000",
    "sonar" => 43.993123,
    10000 => "cruise missiles"
];

//we can use var_dump to print the data types of the values too
print_array($ranges);

function print_with_var_dump($array) {
    echo "<br><pre>";
    print_r(var_dump($array));
    echo "</pre>";
}

print_with_var_dump($ranges);

//sizeof returns the size of the array

echo "<br>the size of \$ages array is " . sizeof($ages);

?>