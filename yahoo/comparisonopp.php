<?php

echo "<h2>we will learn about comparison operators</h2>";

function line() {
    echo "<br>--------------------------------------------------------------------------<br>";
}

$one = 5;
$two = 4;

echo "<p>we will learn about == operator </p>";

if ($one == $two) {
    echo $one . " and " . $two . " are the same";
} else {
    echo $one . " and " . $two . " are not the same";
}

line();

echo $one == $two;    //this will return boolean value, true false

line();

echo "we will learn now about spaceship operator <=> <br>";

//returns -1
echo $two <=> $one;

echo "<br>";

//returns 1
echo $one <=> $two;

echo "<br>";

//if both have the same value, returns 0

echo $one <=> $one;

line();

// <> and != are not equal to operator
echo "<h3>using != </h3>";
if ($one != $two) {
    echo $one . " and " . $two . " are not the same";
} else {
    echo $one . " and " . $two . " are not the same";
}

line();

echo "<h3>using <></h3>";
//another not equal to operator
if ($one <> $two) {
    echo $one . " and " . $two . " are not the same";
} else {
    echo $one . " and " . $two . " are not the same";
}

line();

echo "<h3>now === </h3>";

echo "value of first variable is " . $one;
echo "<br>another variable " . $two;

echo $one == $two;      //returns true

echo "<p> now we will learn about !== operator</p>";

line();

$suppose_one = 'p';     //character
$suppose_two = "p";     //string

if ($suppose_one === $suppose_two) {
    echo "<p> $suppose_one and $suppose_two are the same</p>";
} else {
    echo "<p> $suppose_one and $suppose_two are NOT the same</p>";
}

echo "<h5>php considers a single character 'p' and string \"p\" the same </h5>";
echo "<p>i love php</p>";

?>


<link rel="stylesheet" href="style.css">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>one two</title>
</head>
<body>

</body>
</html>








































