<?php

$randomArray = [];
for ($i = 0; $i < 100; $i++) {
    try {
        $randomArray[] = random_int(10, 99);
    } catch (Exception $e) {
    }
}

$searchNumber = 20;
if (in_array($searchNumber, $randomArray, true)) {
    echo $searchNumber . " found in the array";
} else {
    echo $searchNumber . " not found in the array";
}

// this is useful function to find element in the array
//  in_array(needle, haystack)
