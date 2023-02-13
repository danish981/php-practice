<?php

$cookie_name = "user";
$cookie_value = "opera browser";
$deletion_time = time() + 86400;

// "/" means we can access cookie from everywhere
// time() means the current time
// cookie will be deleted after that time
// + 86000 means the seconds, from the current time
setcookie($cookie_name, $cookie_value, $deletion_time, "/");

// but there is occuring a problem with it,
// it is not deleting after the 2nd time page refreshing,
// i have written the same code,
// https://www.youtube.com/watch?v=QfKFijweO64&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=101
// i am following this video

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cookies</title>
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

<!-- trying to access the cookie here -->
<!-- do not write direct cookie value, first check if cookie is set or not -->
<?php //echo "cookie value is " . $_COOKIE["user"]; ?>

<!-- first check if cookie is set or not , by browser or by website -->
<?php
if (isset($_COOKIE["user"])) {
    echo "<br>the value of cookie is " . $_COOKIE["user"];
    echo "<br>cookie will be deleted after " . $deletion_time . " seconds";        //this line may be false
} else {
    echo "<br>the value of cookie is not set";
}

?>

</body>
</html>