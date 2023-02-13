<?php

$an_array = array("pakistan", "afghanistan", "iran", "turkey");

$mixed_array = array("brown", 34, "pakistan", 23.32114, "orange", "burhan");

echo "<br>";
echo $an_array[0] . "<br>";
echo $an_array[1] . "<br>";
echo $an_array[2] . "<br>";
echo $an_array[3] . "<br>";

echo "<br>------------------------------------------------------------------------------";
echo $mixed_array[0] . "<br>";
echo $mixed_array[1] . "<br>";
echo $mixed_array[2] . "<br>";
echo $mixed_array[3] . "<br>";
echo $mixed_array[4] . "<br>";
echo "<br><hr>------------------------------------------------------------------------------";

//the funciton to print all the elements in the array, instead of echo multimple times
echo "<br><pre>";
print_r($mixed_array);
echo "</pre>";

echo "<br>";

//we can do this for the readability of the php indexed arrays,
echo "<pre>";
print_r($mixed_array);
echo "</pre>";

//function to print the array, instead of writing every time
function print_array_arranged($array) {
    echo "<br><pre>";
    print_r($array);
    echo "</pre>";
}

//to print an array, using loop,
function print_array_loop($array) {
    echo "<br>";
    for ($i = 0; $i < sizeof($array); $i++) {    //size of operator returns the size of array
        echo $array[$i] . "<br>";
    }
}

// fill the array with random numbers, and return it
function populate_array(array $array): array {
    foreach ($array as $value) {
        $value = rand(200, 300);
    }
    return $array;
}

function print_array_loop_formatted($array) {
    //will behave like unordered list and all the items in list items
    echo "<br><ul>";
    for ($i = 0; $i < sizeof($array); $i++) {
        echo "<li>" . $array[$i] . "</li>";        //each item will be use as list item
    }
    echo "</ul>";
}

// an array havning many elements , lets see
$random_array = array("umar", "burhan", "jackson", "vlamdir", "mahatir", "erdogan", "fatima", "Ayesha", "qasim");

//printing the array elements using <pre>
print_array_arranged($random_array);

//comments are important too
print_array_loop($random_array);

//call another funciton,
print_array_loop_formatted($random_array);

echo "<br><br><hr>";

//the array concept is very important, it will be used in php with mysql too , very important

//if we want to fix the array size, we can use splitFixedsize

// this array can only have 10 elements

// splitFixedSize(10) not found in this version of php, nor in the documentation, 7.4.6 php version
// $num_array = new SplitFixedSize(10);
// $num_array = populate_array($num_array);
// print_array_arranged($num_array);

?>

<style>
  body {
    background-color: wheat;
    padding: 20px;
    margin: 20px;
    font-family: verdana;
  }
</style>