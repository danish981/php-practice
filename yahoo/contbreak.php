<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 8:14 PM
 */

echo "<h2>we will learn about the <span>continuse statement</span></h2>";

//suppose we are printing a series of numbers
line();

//loop starting
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) {
        $value = $i;
        continue;       //goes back to the for loop, the condition area, leaves all the remaining statements
    }
    echo "the value is $i <br>";
}
//loop ending

echo "<br>the missing value is $value";
line();

echo "<h2> now we will learn how <span>break statement</span> works </h2>";

//loop starting
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;  //gets out from the loop, and does not run the remaining iterations, ends the loop
    }
    echo " values $i <br>";
}
//loop ending

function line() {
    echo "<br>---------------------------------------------------------------<br>";
}

?>

<link rel="stylesheet" href="style.css">
