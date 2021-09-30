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

echo "<br>we will learn about the for each loop";

$color = [
    "brown" => 340,
    "orange" => 330,
    "red" => 200,
    "pink" => 300,
    "khakee" => 450,
    "black" => 201,
    "white" => 232,
    "dark-red" => 455,
    "off-white" => 112,
    "gray" => 322,
    "dark-gray" => 232,
    "light-gray" => 232,
    "light-blue" => 432
];

//printing the array elements with the for each loop
foreach ($color as $value) {
    echo "<br> $value";        //prints only the values, not the keys
}

line_break();

//printing the array elements with the keys too
foreach ($color as $key => $value) {
    echo "<br> $key = $value";
}

line_break();

//displaying the values as lists
echo "<br><ul>";
foreach ($color as $key => $value) {
    echo "<li> $key => $value </li>";
}
echo "</ul>";

?>

<link rel="stylesheet" href="style.css">
