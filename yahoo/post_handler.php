<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

//we can show each field indivudually too, yes here we can see

echo "<br>username is --> " . $_POST["username"];
echo "<br>email is   ---> " . $_POST["email"];
echo "<br>password is --> " . $_POST["password"];
echo "<br>phone number is " . $_POST["phone"];

?>

<style>
    body {
        font-family: verdana;
        padding: 20px;
        margin: 20px;
        background-color: lightgray;
    }
</style>