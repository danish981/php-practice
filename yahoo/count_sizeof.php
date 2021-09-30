<?php

echo "<br> we will learn array function, count() and sizeof() <br><hr>";

//the functionalites of sizeof and count are the same, exactly the same

//made an array of random numbers
$random_numbers = [rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20), rand(10, 20)];

//suppose we dont know the exact number of elements in the array
for ($i = 0; $i < sizeof($random_numbers); $i++) {
    echo "Random number is " . $random_numbers[$i] . "<br>";
}

echo "<br>NOTE: each time the page is refreshed, the random numbers are generated new";

echo "<br><hr>";

echo "<br>now we will do the same with count() function to determine the number of iterations of the loop";

for ($i = 0; $i < count($random_numbers); $i++) {
    echo "Random number is " . $random_numbers[$i] . "<br>";
}

echo "<br>note that the list of random numbers is exactly the same as above list";

echo "<br><hr>";

//we will make multi dimensional array to make the concept clear, of the sizeof and count

$student_marks = [
    "ibraheem" => ["chemistry" => 56, "biology" => 55, "math" => 98],
    "ismaeeel" => ["chemistry" => 98, "biology" => 45, "math" => 45],
    "qasimmmm" => ["chemistry" => 56, "biology" => 77, "math" => 65],
    "basheeer" => ["chemistry" => 29, "biology" => 34, "math" => 86],
];

echo "<br><hr>";
echo "<br>displaying all the elements in array";
echo "<br><pre>";
print_r($student_marks);
echo "</pre>";

//if we use the count function with the multi array, it will show us the number of basic array, not the inner elements
echo "<br> count() function " . count($student_marks);        //show 4
echo "<br> sizeof() function " . sizeof($student_marks);        //show 4 too

//but suppose if we want the all the array elements, includding sub arrays, and their inner elements too
//we can use te mode, method parameter

echo "<br><hr>";
echo "<br> count() function with another parameter " . count($student_marks, 1);        //1 is mode, by default the value is 0
echo "<br> sizeof() function with another parameter " . sizeof($student_marks, 1);
echo "<br><hr>";

echo "<br>there is another use of sizeof() and count(), we can count the array elements in nested array, within the elements";

echo "<br>the array elements inside the ibraheem array is " . sizeof($student_marks["ibraheem"]);        //display the number elements in inside the array
echo "<br>the inside array number of elements are " . sizeof($student_marks["ismaeeel"]);    //returns 3
echo "<br>the elements inside the array " . sizeof($student_marks["basheeer"]);        //show 3 too
echo "<br> elements arrayyyy " . sizeof($student_marks["qasimmmm"]);        //show 3

echo "<br><hr>";        //breaks
echo "<br>now using the count(var) function instead of sizeof() function";
//the same we can do with count() function too
echo "<br>the sub array elements ibraheem in are " . count($student_marks["ibraheem"]);        //shows 3
echo "<br>the sub array elements ismaeeel in are " . count($student_marks["ismaeeel"]);        //shows 3
echo "<br>the sub array elements qasimmmm in are " . count($student_marks["qasimmmm"]);        //shows 3
echo "<br>the sub array elements basheeer in are " . count($student_marks["basheeer"]);        //shows 3

//creating an array with elements, simple array
$fruit_names = ["grapes", "lemon", "apple", "pomegranate", "guava", "guava", "grapes"];        //this is a test array with repeating values

echo "<br><hr>";
echo "<br>another useful function for arrays, array_count_values(input)";

echo "array_count_values(input) calling --> " . array_count_values($fruit_names);        //array to string convertion, notice

// array_count_values($var) returns an array, with all the elements repeating and non-repeating
echo "<br><pre>";
print_r(array_count_values($fruit_names));        //prints the detail of the arrays with repeating number of elements, or not
echo "</pre>";

//test the array with loop with count
echo "<br><hr> in a new file";

?>

<link rel="stylesheet" href="style.css">

 