<?php

//we are now trying to access cookie from this file, located in the same web files, and same directory

if (isset($_COOKIE["user"])) {
    echo "<br>the value of cookie is " . $_COOKIE["user"];
} else {
    echo "<br>cookie is not set";
    echo "<br>or it is prohibited to access from outside of the same file";
}

?>

<style>
  body {
    background-color: lightgray;
    font-family: verdana;
    padding: 20px;
    margin: 20px;
  }
</style>