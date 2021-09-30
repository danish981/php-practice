<?php

// in modern php, the equal signs are used carefully
// like there is a difference in == and ===

$number = 10;

if ($number == "10") {
    // this line will pe called, equals
    // one is integer and other one is string, how can they be equal
    echo "equals ";
} else {
    echo "un-equal";
}

echo "<hr>";

// if we write the same script with tripple equal signs , we will get
if ($number === "10") {
    echo "equals";
} else {
    echo "not equals";
}

// TODO: CARE ABOUT THE DOUBLE EQUAL AND TRIPPLE EQUAL SIGNS

?>