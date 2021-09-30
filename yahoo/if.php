<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 22-Jul-20
 * Time: 2:42 AM
 */

//first method of writing if
$one = 5;
$two = 8;

if ($one > $two) {
    echo "<p>$one is greater than $two";
}

if ($two > $one) {
    echo "<p> $two is greater than $one";
}

//another method for writing if statement

$username = "user";

if ($username == "user"):
    echo "<p>username is $username";
    echo "<p>username is $username";
    echo "<p>username is $username";
    echo "<p>username is $username";
    echo "<p>username is $username";
    echo "<p>username is $username";
    echo "<p>username is $username";
endif;

$name = "burhan";
if ($name == "burhan"):

    echo "<p>name is $name</p>";
    echo "<p>name is $name</p>";
    echo "<p>name is $name</p>";
    echo "<p>name is $name</p>";
    echo "<p>name is $name</p>";
    echo "<p>name is $name</p>";

endif;

$string = "programming is not easy";
if ($string == "programming is easy") {
    echo "you said wrong";
}








