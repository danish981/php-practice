<?php

//random test array
$names = ["danish", "mehmood", "burhan", "umar", "khalid", 40, 50, 60, "arslan", "khalid", "anam", "wajeeha", "sadia"];

echo "we will learn the two array functions, in_array(needle, haystack) and array_search(needle, haystack) <br><hr>";

echo "<br>in_array(needle, haystack) will return the true or false on the behalf of value found or not ";
echo "<br>array_search(needle, haystack) will return the index/key if the array is associative/key array";
echo "<br><br><hr>";

//using in_array
echo in_array("umar", $names);        //will returns 1, or 0
echo "<br>";

if (in_array("khalid", $names)) {        //will return true with the string values, but _____
    echo "item found";
} else {
    echo "item not found";
}

echo "<br><hr>";
if (in_array(40, $names)) {
    echo "found";
} else {
    echo "Not found";
}

echo "<br><hr>";
if (in_array("60", $names)) {        //will return true, but this item is not in the array, that is integer, and this is string
    echo "found successfullyyyyyy";
} else {
    echo "not found ";
}

echo "<br><hr>";
//to prevent the last array,
if (in_array(40, $names, 1)) {        //we can write here third paramter, 1 or true, to make the accurate search in the function
    echo "found successfully__yy__yyyy";
} else {
    echo "NOT FOUNDDDDDD ___";
}

//-------------------------------------------------------------------------------------------------------------------------
echo "<br><hr>";

echo "<br>we will now work on array search <br>";

//array search will return the index number or the key, not the true or false, 1 or 0
if (array_search("khalid", $names)) {
    echo "khalid | found in the array";
} else {
    echo "khalid | not found in the array";
}

echo "<br>array_search(needle, haystack) returns an index number <br> ";
echo array_search("khalid", $names);

echo "<br><hr>";

if (array_search(40, $names)) {
    echo "40 found in this array";
} else {
    echo "40 not found in the array";
}

echo "<br><hr>";

echo "<br>array_search(needle, haystack) and in_array(needle, haystack) works same with the if() <br>";

$index = array_search("umar", $names);
echo "the element at $index is $names[$index]";

echo "<br><hr>lets test the in_array(needle, haystack) and array_search(needle, haystack) with the associative array <br>";
$assoc_array = [
    //	keys => value
    "a" => "banana",
    "b" => "grapes",
    "c" => "apple",
    "d" => "lemon",
    "e" => "pomegranate"
];

//in the case of array_search() in associtivate array, the key is returned
echo "<br> the kye of the banana is " . array_search("banana", $assoc_array);
echo "<br> the key of the pomegranate is " . array_search("pomegranate", $assoc_array);
echo "<br> the key of the apple is " . array_search("apple", $assoc_array);

?>

<link rel="stylesheet" href="style.css">