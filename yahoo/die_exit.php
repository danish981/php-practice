<?php

// die and exit funciton are equvilant to each other,
// we can use any function of these two functions

$i = 1;
// for testing purpose, we wrtie some dummy statement
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);

// exit() function is exactly the same as die
die("<br>error occured here");
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
// the die function is written here, thw next statement wont be executed
// we can put the parameters in the function, a string message, for the error
die();
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);
echo "<br>this is a statement " . ($i = +1);

?>

<style>
    body {
        background-color: wheat;
        padding: 20px;
        margin: 20px;
        font-family: verdana;
    }
</style>