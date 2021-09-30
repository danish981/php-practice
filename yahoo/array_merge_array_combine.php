<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 20-Aug-20
 * Time: 9:56 PM
 */

function get_formatted_array($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre><hr>";
}

$countries = ["pakistan", "iran", "afghanistan", "indonesia"];
$colors = ["brown", "blue", "orange", "green"];
$religions = ["muslim", "buddism", "hindu", "jews", "christians"];

$resulting_array = array_merge($countries, $colors);    //with two parameters
get_formatted_array($resulting_array);

$resulting_array = array_merge($countries, $colors, $religions);    //with three parameters of array
get_formatted_array($resulting_array);

$countries_2 = ["pakistan", "iran", "4" => "afghanistan", "indonesia"];
$colors_2 = ["brown", "4" => "blue", "orange", "green"];
$religions_2 = ["muslim", "buddism", "hindu", "jews", "christians"];
$test_array = ["monitor", "mouse", 556600, 432412, "dahi bhally"];

echo "<br>with the <span>same</span> keys";

$resulting_array = array_merge($countries_2, $colors_2, $religions_2, $test_array); //with four parameters
get_formatted_array($resulting_array);

echo "<br>there is another way of merging the indexed arrays, with + sign";
$resulting_array = $countries_2 + $colors_2;        //array merging with + sign
get_formatted_array($resulting_array);

//if there are similar indexes, then what will we do
$sample_array_1 = [1 => 1, 2, 3, 4, 5];
$sample_array_2 = [1, 2, 3, 1 => 4, 5];

$resulting_array = array_merge($sample_array_1, $sample_array_2);
get_formatted_array($resulting_array);

echo "<br>now by using + sign";
$resulting_array = $sample_array_1 + $sample_array_2;
get_formatted_array($resulting_array);

echo "<br>reversing the arrays with + sign";
$resulting_array = $sample_array_2 + $sample_array_1;
get_formatted_array($resulting_array);

echo "<br>now the indexes are of consecutive alphabets";
$sample_array_1 = ["a" => "samurai jack", "b" => "omy", "c" => "remundo"];
$sample_array_2 = ["a" => "zooko", "b" => "jackson", "c" => "private"];

$resulting_array = $sample_array_1 + $sample_array_2;
get_formatted_array($resulting_array);

//reversing the order
$resulting_array = $sample_array_2 + $sample_array_1;
get_formatted_array($resulting_array);

$sample_array_1 = ["a" => "samurai jack", "b" => "omy", "c" => "remundo"];
$sample_array_2 = ["d" => "zooko", "e" => "jackson", "f" => "private"];

$resulting_array = $sample_array_1 + $sample_array_2;
get_formatted_array($resulting_array);

//reversing the order
$resulting_array = $sample_array_2 + $sample_array_1;
get_formatted_array($resulting_array);

echo "<br>now with the matching alphabetic keys";
$sample_array_1 = ["a" => "samurai jack", "e" => "omy", "c" => "remundo"];
$sample_array_2 = ["d" => "zooko", "e" => "jackson", "f" => "private"];

$resulting_array = $sample_array_1 + $sample_array_2;
get_formatted_array($resulting_array);

//reversing the order
$resulting_array = $sample_array_2 + $sample_array_1;
get_formatted_array($resulting_array);

echo "<br><h2>array_merge_recursive()</h2> function";

echo "<br>array_merger_recursive will, wherver finds a duplicate key, it will form a new nested array";
$countries = ["pakistan", "metal" => "iran", "afghanistan", "indonesia"];
$colors = ["brown", "metal" => "blue", "orange", "green"];
$religions = ["metal" => "muslim", "buddism", "hindu", "jews", "christians"];

$resulting_array = array_merge_recursive($countries, $colors, $religions);
get_formatted_array($resulting_array);

//now playing with the more complex arrays
$countries = ["pakistan", "metal" => "iran", "afghanistan", "indonesia"];
$colors = ["brown", "metal" => "blue", "orange", "green"];
//multi dim array
$religions = [
    "metal" => [
        "muslim_1",
        "muslim_2",
        "muslim_3"
    ],
    "buddism",
    "hindu",
    "jews",
    "christians"
];

$resulting_array = array_merge_recursive($countries, $colors, $religions);
get_formatted_array($resulting_array);

echo "<br><h3>array_combine()</h3>";
$names = ["james", "burhan", "salman", "ayesha"];
$ages = [34, 54, 33, 24];
$resulting_array = array_combine($names, $ages);

get_formatted_array($resulting_array);
//the length of the array should be the same
//1st parameter in array becomes the keys, 2nd one becomes the values

?>


<link rel="stylesheet" href="style.css">





















