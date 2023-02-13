<?php

// every time we deal with sessions, we need to start it at the top of every line of code
// everywhere, where session values are used, we have to write session_start() there too
session_start();

// we will learn about sessions
// a temporary user information stored in server systems
// 90% of the session use is login registration forms
// we can permanent store sessios in database too
// a super global variable

// $_SESSION["username"] is id, id of the session
// burhan wani is the value,
// we can store many values in the session, on different location, ids, keys (we can sey)
// session is created,
// and we can any time change the value of session
$_SESSION["username"] = "jawaid qureshi";
$_SESSION["email"] = "burhanwani4545@gmail.com";
$_SESSION["password"] = "kingoffighters2007centure";
$_SESSION["old_password"] = "samuraijack123";

echo "<br>session is created";

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
<a href="session_view.php">click to view</a>

<br><br>
<a href="session_destroy.php">click to delete session</a>
</body>
</html>