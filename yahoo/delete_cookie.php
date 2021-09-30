<?php

// prints the value of the cookie
// when this is refreshed, (executed the code) , first time cookie value will be printed out
// but the second time, the cookie value will not be printed
echo "<br>cookie value is " . $_COOKIE["user"];

// to delete the set cookie, it is very easy to delete it
// cookie name
// set value to empty string, the 2nd parameter
// just put minux in the middle of time and the seconds
// it means that from the current, before 86400 (one day) the cookie was deleted
// now we cannot access the cookie
setcookie("user", "", time() - 86400, "/");

?>


<style>
    body {
        background-color: lightgray;
        padding: 20px;
        margin: 20px;
        font-family: verdana;
    }
</style>