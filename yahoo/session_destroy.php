<?php

// to destory the session, first we need to create session_start()
session_start();

// when delete the session, it does not delete the session directly,
// first we need to unset all the values to emptly, we use another function
// session unset removes, all the variables,
session_unset();

//after all, we wrtte session destroy, to destory all the session created
// so basically, we cannot directly use this function, we first write session unset, then we werite session destroy
session_destroy();

echo "<br><hr>session destroyed successfully";

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
            font-family: verdana;
            padding: 20px;
            margin: 20px;
        }
    </style>

</head>
<body>

<?php
//session deleteion here in this file

?>


</body>
</html>