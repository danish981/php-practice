<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 8:07 AM
 */

$weekday = 5;

switch ($weekday) {
    case 1:
        echo "<br>today is monday";
        break;
    case 2:
        echo "<br>today is tuesday";
        break;
    case 3:
        echo "<br>today is wednesday";
        break;
    case 4:
        echo "<br>today is thursday";
        break;
    case 5:
        echo "<br>today is friday";
        break;
    case 6:
        echo "<br>today is saturday";
        break;
    case 7:
        echo "<br>today is sunday";
        break;
    default:
        echo "<br>invalid weekday passed to the switch statement";
}

line();

$location = "gujranwala";

//i have a little problem in php if else if, this takes a boolean expression or value, whty a int type and string type it is accepting
if ($location) {
    //problem im faceing here

}

function line() {
    echo "<br>=============================================================";
}

?>

<link rel="stylesheet" href="style.css">
