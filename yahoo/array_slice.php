<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 21-Aug-20
 * Time: 12:57 AM
 */

echo "<br><h3>array_slice()</h3>";

function print_formatted_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";
}

$colors = ["green", "blue", "orange", "white", "gray", "black"];
$resulting_array = array_slice($colors, 2, 5);
print_formatted_array($resulting_array);

$colors = ["green", "blue", "orange", "white", "gray", "black"];
$resulting_array = array_slice($colors, 1, 3, true);
print_formatted_array($resulting_array);

echo "<br>with the negative values paramters to the function now";
$colors = ["green", "blue", "orange", "white", "gray", "black"];
$resulting_array = array_slice($colors, -4, 3, true);
print_formatted_array($resulting_array);

echo "<br>with the associative arrays now";
$colors = ["a" => "green", "b" => "blue", "c" => "orange", "d" => "white", "44" => "gray", "f" => "black"];
$resulting_array = array_slice($colors, 2, 4);
print_formatted_array($resulting_array);

$colors = ["a" => "green", "b" => "blue", "c" => "orange", "d" => "white", "44" => "gray", "f" => "black"];
$resulting_array = array_slice($colors, 2, 4, true);
print_formatted_array($resulting_array);

?>
<link rel="stylesheet" href="style.css">

























