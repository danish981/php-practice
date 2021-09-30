<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 20-Aug-20
 * Time: 2:49 AM
 */

echo "<h2>we will learn about <span>array_shift()</span> and <span>array_unshift()</span> functions</h2>";
echo "<br><hr>";

function get_formatted_array($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre><hr>";
}

$countries = array("pakistan", "afghanistan", "iran");

echo "<br>before shifting";
get_formatted_array($countries);

echo "<br>after shifting";
array_shift($countries);

get_formatted_array($countries);

echo "<br>now we will see the array_unshift function ";

$to_unshift = "turky";
echo "<br>the element to unshift ($to_unshift)";

array_unshift($countries, $to_unshift);

echo "<br>the array becomes";
get_formatted_array($countries);

echo "<br>we can put multiple entries with this function";
//like

array_unshift($countries, "pakistan", "china", "russia");
echo "<br>new array becomes";
get_formatted_array($countries);

?>


<link rel="stylesheet" href="style.css">
