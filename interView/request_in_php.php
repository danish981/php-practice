<?php

// they are other ways to check if the form is submitted or not
// by server , by post or by request

// $_REQUEST[""]	is used to get data from url by submitted form or htmld ata

if (isset($_POST["submit"])) {
    // if submit button is clicked
    // check the request here
    $username = $_REQUEST["username"];

    // username is required, so it cannot be empty
    echo $username;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>request</title>
</head>
<body>
<!-- if no action file is given, then the current file will handle the form -->
<form action="" method="post" autocomplete="off">
    <input type="text" name="username" placeholder="enter username" required="">
    <input type="submit" name="submit" value="submit username">
</form>
</body>
</html>