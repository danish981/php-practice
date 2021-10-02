<?php

// we will see the difference in for and foreach loop
// lets see the difference with random number arrays

$arrayRandom_one = [];
$arrayRandom_two = [];

// in php, the arrays are dynamic, no need to define the size of arrays
// fill both the array with random values

$arraySize = 10;

// the for loop will iterate only at the termination condition
// we can run loop without writing the terminating condition too
for ($i = 0; $i < $arraySize; $i++) {
    // instead of array_push(array, var) we can use
    // if we want to push multiple values at the same time, then we use the array_push(array, var) function
    $arrayRandom_one[] = random_int(10, 99);
    $arrayRandom_two[] = random_int(100, 999);
}

// so size of both the arrays is the same

// lets iterate over the array using foreach()
// first one is array name an second paramter is the variable to be iterated over the array

echo "first array data <br>";
foreach ($arrayRandom_one as $value) {
    echo $value . "\t";
}

echo "<br>";

// iterate the data of second array
echo "second array data <br>";
foreach ($arrayRandom_two as $value) {
    echo $value . "\t";
}
