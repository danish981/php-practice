<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 19-Aug-20
 * Time: 12:33 PM
 */

echo "<br><h3>we will learn about the <span>array_pop()</span> and <span>array_push()</span> functions</h3>";

function get_formatted_array($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre><hr>";
}

$test_array = ["grapes", "apples", "banana"];

array_pop($test_array);
get_formatted_array($test_array);

echo array_pop($test_array);        //returns the popped item/element/value

echo "<br>array_pop function returns an element, a string type";

//lets try for array push

//getting confused in array push function
echo "<br> now we will see the <span>array_push()</span> function<br>";

$array_country = ["pakistan", "japan", "afghanistan", "iran", "china", "bangladesh", "korea", "indonesia"];

array_push($array_country, "netherlands");

get_formatted_array($array_country);        //new element inserted into the array

?>

<link rel="stylesheet" href="style.css">
