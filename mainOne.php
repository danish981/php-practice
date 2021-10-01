<?php

// bookOne not found || error coming from running this file, locate the error

use Utils\Functions;

include("classes/PolyClass.php");
include("classes/Functions.php");

$variable1 = 100;
$variable2 = 100;
$variable3 = 100;
$variable4 = 100;
$variable5 = 100;
$variable6 = 100;

echo $variable1 . "<br>";
echo $variable2 . "<br>";
echo $variable3 . "<br>";
echo $variable4 . "<br>";
echo $variable5 . "<br>";
echo $variable6 . "<br>";

Functions::assignRandomValues($variable1, $variable2, $variable3, $variable4, $variable5, $variable6);

echo $variable1 . "<br>";
echo $variable2 . "<br>";
echo $variable3 . "<br>";
echo $variable4 . "<br>";
echo $variable5 . "<br>";
echo $variable6 . "<br>";









// calling variadic functions, working perfect
//Functions::printArgs(65,34, "something", "bla bla bla", 56, 34, 65.654, Functions::getArrayRandom());






