<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 21-Aug-20
 * Time: 1:47 AM
 */

echo "<br>we will learn how to use array keys, functions";

$colors_3 = ["green", "blue", "orange", "white", "gray", "black"];

echo "<br>here are the array keys of the above array";

$sample_array = array_keys($colors_3);

function print_formatted_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";
}

print_formatted_array($sample_array);

$countries = ["brave" => "pakistan", "coward" => "india", "friend" => "turkey"];
print_formatted_array(array_keys($countries));

echo "<br>first key of array";
echo array_key_first($countries);       //php 7.3

echo "<br>last key of array";
echo array_key_last($countries);            //7.3

echo "<br>if array key exists or not";
echo "<br>" . array_key_exists("brave", $countries);        //returns bool

echo "<hr>";

//there is another function to do the same task
echo "<br>" . key_exists("coward", $countries);     //returns bool

if (key_exists("friend", $countries)) {
    echo "<br> found at " . $countries["friend"];
} else {
    echo "<br> not found in the array key friend";
}

?>

<link rel="stylesheet" href="style.css">
