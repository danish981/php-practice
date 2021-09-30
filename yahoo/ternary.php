<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 8:20 AM
 */

echo "<br> we will see how ternary operator works in php";

$one = 10;
$two = 20;

echo ($one > $two) ? "<br> $one is greater than $two" : "<br> $two is greater than $one";

echo "<h1>this ternary (condition)? true statement : false statement | will work nicely </h1>";

//lets learn by another example,

//echo is written only once before the ternary line

//another way of writing ternary
echo $two < $one ? "<br>something really bad is going to be happened" : "something really good is going to be happened";

printLine();

$test_variable = 5;

($test_variable > 10) ? $test_variable = " true " : $test_variable = " false ";

echo "<br>value of test variable is " . $test_variable;

function printLine() {
    echo "<br>----------------------------------------------------------------------";
}

//yahoo baba 17 tutorial

?>


<link rel="stylesheet" href="style.css">
