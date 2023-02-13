<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

//we can show each field indivudually too, yes here we can see

echo "<br>username is --> " . $_GET["username"];
echo "<br>email is   ---> " . $_GET["email"];
echo "<br>password is --> " . $_GET["password"];
echo "<br>phone number is " . $_GET["phone"];

?>

<style>
  body {
    font-family: verdana;
    padding: 20px;
    margin: 20px;
    background-color: lightgray;
  }
</style>