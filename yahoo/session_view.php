<?php

// everywhere , where session values are needed, we have to write session_start()
session_start();

// if the session is created, these valeus are shown
//echo "<br>username is --> " . $_SESSION["username"];
//echo "<br>email is " . $_SESSION["email"];

echo "<br>";
//echo $_SESSION["password"];
echo "<br>";
//echo $_SESSION["old_password"];

// now printing the session, the whole array,
echo "<br><pre>";
//print_r($_SESSION);
echo "</pre><br><hr>";

// we always used if(isset[]) etc to check if the session is created, destroyed or not,
// otherwise the session value is printed out

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      background-color: lightgray;
      padding: 20px;
      margin: 20px;
      font-family: verdana;
    }
  </style>
</head>
<body>

<br><br>
<hr>
<?php

// we can see session values, everywhere in the files, where session_start() is written
// echo "<br>username is --> " . $_SESSION["username"];
// echo "<br>email is " . $_SESSION["email"];

//the value can be accessed, within html, or within php
//$_SESSION["password"] = "kingoffighters2007centure";
//$_SESSION["old_password"] = "samuraijack123";

// we should first check if session is set, destroyed or not
// check for a certain id, session, or any key,
if (isset($_SESSION["username"])) {
    echo "<br>here is the username value " . $_SESSION["username"];
} else {
    echo "<br>session is not set or destroyed";
}

?>

<br>
<hr>
<a href="session_destroy.php">click to destroy the session</a>

</body>
</html>