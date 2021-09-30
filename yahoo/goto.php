<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 8:29 PM
 */

echo "<h3>we will learn the <span>goto statement</span> </h3>";

for ($i = 1; $i <= 100; $i++) {
    echo "<br>statement number --> $i ";
    if ($i == 45) {
        echo "<br>GOTO STATEMENT CALLED";
        goto location;      //goto statement called, the label could be anywhere in the current file, all the middle lines are skipped
    }
}
echo "<br>-------------------------------------------------------------------------------------<br>";

echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
location:       //from the goto statement
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";
echo "<br>I am a statement _________________________________________________ <br>";

echo "<br>================================================================<br>";

//lets understand with another example

for ($j = 1; $j <= 10; $j++) {
    //another goto statement
    if ($j == 5) {
        echo "<br>goto statement called once again<br>";
        goto another_location;
    }
}

for ($j = 1; $j <= 10; $j++) {
    //another goto statement
    if ($j == 5) {
        echo "<br>goto statement called once again<br>";
        //another_location:       //goto statement into the loop , is not allowed
    }
}

echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";

//here we will call the goto label
another_location:
echo "<br>goto label being called here ";

echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";
echo "<br>statements";

?>

<link rel="stylesheet" href="style.css">
