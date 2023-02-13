<?php

//this is test php file

//this is the post form

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>get form</title>
  <style>
    body {
      padding: 20px;
      margin: 20px;
      background-color: lightgray;
      font-family: verdana;
    }

    form {
      padding: 20px;
      margin: 20px auto;
      border: 1px solid gray;
      border-radius: 5px;
      background-color: lightblue;
      box-shadow: 5px 10px 20px #000;
    }

    input {
      padding: 5px;
      margin: 2px 5px;
    }
  </style>
</head>
<body>

<!-- the file post_handler.php will handle this file -->
<form action="post_handler.php" method="post">
  username : <input type="text" name="username" placeholder="username" required="" autocomplete="true" width="50"><br>
  email : <input type="email" name="email" placeholder="email" autocomplete="true" required="" width="200"><br>
  password : <input type="password" name="password" placeholder="password" autocomplete="false" required=""
      width="30"><br>
  phone number : <input type="number" name="phone" placeholder="phone number" autocomplete="true" required=""
      width="20"><br>
  <input type="submit" value="submit" name="submit">
</form>

<!-- in this file, the data sending method is changed, now it is post method -->

</body>
</html>