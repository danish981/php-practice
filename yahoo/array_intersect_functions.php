<?php

//array intersect functions

function print_formatted_array(array $array): void {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";
}

echo "<br><h3>array intersect functions (values)</h3>";

$colors = ["b" => "brown", "y" => "yellow", "o" => "orange", "w" => "white", "m" => "magenta", "b1" => "blue"];

$colors_1 = ["b" => "black", "g" => "green", "p" => "purple", "y1" => "yellow"];

$colors_2 = ["g" => "gray", "p" => "pale blue", "b" => "blue", "y" => "yellow"];

$returning_array = array_intersect($colors, $colors_1);     //finds element of 1st array in the 2nd array and returns the array with matching elements
print_formatted_array($returning_array);

//changing parameters

$returning_array = array_intersect($colors, $colors_2);     //finds element of 1st array in the 2nd array and returns the array with matching elements
print_formatted_array($returning_array);

//changing and all parameters, you can use many arrays too
$returning_array = array_intersect($colors, $colors_1, $colors_2);     //finds element of 1st array in the 2nd array and returns the array with matching elements
print_formatted_array($returning_array);

//-------------------------------------------------------------------

//intersection of keys

echo "<br><h3>intersection of keys</h3>";

$returning_array = array_intersect_key($colors, $colors_2);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//changing the parameters
$returning_array = array_intersect_key($colors, $colors_1);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//changing order or parameters
$returning_array = array_intersect_key($colors_1, $colors_2);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//increasing number of paramters

$returning_array = array_intersect_key($colors, $colors_2, $colors_1);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//--------------------------------------------------------------------------------------

echo "<br><h3>intersection of array values and keys also</h3>";

$returning_array = array_intersect_assoc($colors, $colors_1);       //returns the array with matching keys and values
print_formatted_array($returning_array);

//changing the paramters
$returning_array = array_intersect_assoc($colors, $colors_2);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//many paramters , 3
$returning_array = array_intersect_assoc($colors, $colors_2, $colors_1);     //returns an array of 1st element keys, that are present in 2nd array paramter
print_formatted_array($returning_array);

//---------------------------------------------------------------------------------------

//callback function , is a function to execute in another function, suppose a function is invoked in the parameter in double quotes,
//or single quotes, or stored in variable, then this function will be called where the function (in which we calling) is created

?>

<link rel="stylesheet" href="style.css">
