<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 21-Aug-20
 * Time: 1:15 AM
 */

echo "<br><h3>array_splice()</h3>";

function print_formatted_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";
}

$colors = ["green", "blue", "orange", "white", "gray", "black"];
$names = ["danish", "babar", "hamza"];

echo "<br>original array";
print_formatted_array($colors);

echo "<br>array_splice does not return an array, but makes changes in original array";

array_splice($colors, 0, count($colors));   //from 0 to length it removes all the elements
print_formatted_array($colors);

$colors_1 = ["green", "blue", "orange", "white", "gray", "black"];
array_splice($colors, -2, 5);
print_formatted_array($colors_1);

$colors_3 = ["green", "blue", "orange", "white", "gray", "black"];

//putting 2nd array elements into 1st one at the beginning
array_splice($colors_3, 0, 0, $names);
print_formatted_array($colors_3);

//now putting 2nd array element into the end
$colors_2 = ["green", "blue", "orange", "white", "gray", "black"];

array_splice($colors_2, count($colors_2), 0, $names);
print_formatted_array($colors_2);

//deleting the middle elements and putting all the 2nd array into the first one
$colors_5 = ["green", "blue", "orange", "white", "gray", "black"];
array_splice($colors_5, 2, 4, $names);
print_formatted_array($colors_5);

//putting the 2nd array somewhere in the middle of 1st one
$colors_6 = ["green", "blue", "orange", "white", "gray", "black"];
array_splice($colors_6, 3, 0, $names);
print_formatted_array($colors_6);

?>

<link rel="stylesheet" href="style.css">





















