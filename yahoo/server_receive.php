<?php

echo "<pre>";
print_r($_SERVER);            // shows all the information about the user and server
echo "</pre>";

echo "<br><hr>";
// we can print a single key information with the server

echo "<br> --> " . $_SERVER["PHP_SELF"];
echo "<br> --> " . $_SERVER["SERVER_SOFTWARE"];
echo "<br> --> " . $_SERVER["SERVER_ADDR"];
echo "<br> --> " . $_SERVER["HTTP_ORIGIN"];
echo "<br> --> " . $_SERVER["MYSQL_HOME"];
echo "<br> --> " . $_SERVER["REMOTE_PORT"];
echo "<br> --> " . $_SERVER["HTTP_USER_AGENT"];
echo "<br> --> " . $_SERVER["REQUEST_TIME"];
echo "<br> --> " . $_SERVER["REQUEST_TIME_FLOAT"];

?>

<style>

  body {
    background-color: lightgray;
    padding: 20px;
    margin: 20px;
    font-family: verdana;
  }

</style>