<?php

// total number of array elements

$limit = rand(20, 200);
$randomNumArray = [];

// terminating condition is not known, so foreach loop is not used
foreach ($randomNumArray as $value) {

}

for ($i = 0; $i < $limit; $i++) {
    $randomNumArray[] = random_int(100, 999);
}

// to count total number of array element in php, we use count() and sizeOf()

// echo "total number array elements in array are : " . sizeof($randomNumArray);

// both the functions are used to count the number of array elements
echo "total number of array elements in array are " . count($randomNumArray);
