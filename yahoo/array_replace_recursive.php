<?php

echo "<br>we will learn about the array_replace(array, array1) and array_replace_recursive(array, array1) <br><hr>";

function get_formatted_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";

}

$test_array = ["pakistan", "afghanistan", "iran", "turkey"];
$test_array_2 = ["china", "russia", "kuwait"];
$test_array_3 = ["brazil", "aazar-baijaan"];

$resulting_array = array_replace($test_array, $test_array_2, $test_array_3);        //with three arrays

get_formatted_array($resulting_array);

$resulting_array = array_replace($test_array_2, $test_array_3);        //with two arrays
get_formatted_array($resulting_array);

$test_array_4 = [
    "a" => "programmer",
    "b" => "coder",
    "c" => "project manager",
    "d" => "team leader",
    "e" => "designer"
];

$test_array_5 = [
    "p" => "polynomial",
    "q" => "quotient",
    "r" => "divider",
    "s" => "dividend",
    "t" => "remainder"
];

$resulting_array = array_replace($test_array_4, $test_array_5);

//if all the values have differnet indexes, they will be merged
get_formatted_array($resulting_array);

$test_array_6 = [
    "a" => "programmer",
    "b" => "coder",
    "c" => "project manager",
    "d" => "team leader",
    "p" => "designer"
];

$test_array_7 = [
    "p" => "polynomial",
    "q" => "quotient",
    "r" => "divider",
    "s" => "dividend",
    "t" => "remainder"
];

//check the 'p' index

//if there is matching index, will be replaced by other and another array
$resulting_array = array_replace($test_array_6, $test_array_7);
get_formatted_array($resulting_array);

$array_fruit = ["grapes", "oranges", "bananas", 1 => "pomegranates"];
$veggies = ["potatoes", "onions"];

$resulting_array = array_replace($array_fruit, $veggies);
get_formatted_array($resulting_array);

echo "<br>array_replace(array, array1) is only used with the indexed or associative arrays<br>";

echo "<br><hr>we will chech the working of <span>array_replace_recursive(needle, haystack)</span> <br>";

//we first create some multi dimensiaonal associative arrays

$multi_dim_array_1 = [
    "a" => "mangoes",
    "b" => ["grapes", "oranges", "bananaes"]
];

$multi_dim_array_2 = [
    "a" => ["potatoes", "onions", "ginjer"],
    "b" => "peach"
];

$resulting_array = array_replace_recursive($multi_dim_array_1, $multi_dim_array_2);
get_formatted_array($resulting_array);

echo "<br>lets head towards the next tutorial";

?>


<link rel="stylesheet" href="style.css">

