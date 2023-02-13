<?php

echo "<br><h1>recursive functions</h1>";

//when a function calls itself

echo "<p>function which calls itself is called resursive funciton</p>";

function show_value(int $value) {
    if ($value <= 10) {            //the terminating condition
        echo "<br> $value";
        show_value($value + 1);      //recursive function, here the value will be increasing
    }
}

//calling the recursive function
show_value(1);

echo "<p>factorial recursive function</p>";

function factorial($n) {
    if ($n == 0) {
        return 1;    //why return 1, in this case
    } else {
        // each time this line executes, factorial will return a value, and each time the value is multiplied by n
        // when value is returned, how it is determined
        return ($n * factorial($n - 1));
    }
}

// another function for factorial, return type also given to it
function another_factorial_function(int $number): float {
    //first we will write the terminating conditin,
    if ($number <= 1) {
        return 1;
    } else {
        return ($number * another_factorial_function($number - 1));
    }
}

echo "<br>factorial is " . factorial(5);
$parameter = 10;
echo "<br>another_factorial_function() is called with parameter $parameter --> " . another_factorial_function($parameter);

echo "<br>we will write the test recursive functions here";

// my funciton, my own function for the recursion
function test_recursion(int $number) {
    if ($number <= 0) {        //this is the base condition, this must be meet to terminate the recursive function
        return 1;    //finally, the funciton returning value will be multipled with this number
    }
    return $number * test_recursion($number - 1);
}

//calling the test_recursive function
echo "<br>" . test_recursion(10);

function calculate_sum(int $value) {
    if ($value <= 100) {
        return;
    } else {
        calculate_sum($value + 1);
    }
}

?>

<link rel="stylesheet" href="style.css">
