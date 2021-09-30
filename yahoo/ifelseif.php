<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 12:33 AM
 */

function line() {
    echo "<br>--------------------------------------------------------------------------------";
}

$something = "something";

$username = "jonathon";

$age = 34;

$country = "england";

$grade = 'B';

$marks = 65;

echo "<h2>we are learning about the if else if </h2>";

echo "<br>marks are $marks";
line();
//this the first method of writing if and if else if and else
if ($marks >= 50) {
    echo "<br>you have got first division";
} else if ($marks >= 30 && $marks <= 40) {
    echo "<br>you are just passed";
} else {
    echo "<br>below the grades and hardly passed";
}

line();

//now we will write the another method for writing php syntax

if ($marks >= 80):
    //a group of statements will be written here,
    echo "<br> marks are greater than 80 percent";
    echo "<br> marks are greater than 80 percent";
elseif ($marks > 70 && $marks <= 80):
    echo "<br>the marks are between seventy and eighty";
    echo "<br>the marks are between seventy and eighty";
elseif ($marks > 60 && $marks <= 70):
    echo "<br>marks are in middle of sixty percent and seventy percent";
    echo "<br>marks are in middle of sixty percent and seventy percent";
else:
    echo "<br>marks are lower than sisty";
    echo "<br>marks are lower than sisty";
endif;

?>

<link rel="stylesheet" href="style.css">



























