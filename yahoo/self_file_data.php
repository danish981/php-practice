<?php

// WE WILL HANDLE THT FORM DATA INTO THIS OWN FILE FILE, NOT THE FILE SOMEWHERE ELSE

// $_SERVER["PHP_SELF"] returns the current file name where the php file is been executed

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get form</title>
    <style>
        body {
            color: #000;
            padding: 20px;
            margin: 20px;
            background-color: gray;
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

<!-- DUMMY DATA FORM -->
<!-- the file post_handler.php will handle this file -->
<!-- we can write here self_file_data.php too -->
<!-- $_SERVER["PHP_SELF"] returns the current file name where the php file is been executed   -->
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    username : <input type="text" name="username" placeholder="username" required="" autocomplete="true" width="50"><br>
    email : <input type="email" name="email" placeholder="email" autocomplete="true" required="" width="200"><br>
    password : <input type="password" name="password" placeholder="password" autocomplete="false" required=""
                      width="30"><br>
    phone number : <input type="number" name="phone" placeholder="phone number" autocomplete="true" required=""
                          width="20"><br>
    <input type="submit" value="submit" name="submit">
</form>


<?php

//lets handle the form data into this own file, handler is the file, this is the file
if (isset($_POST["submit"])) {        //if the submit button is clicked
    echo "<br>username --> " . $_POST["username"];
    echo "<br>email is --> " . $_POST["email"];
    echo "<br>password --> " . $_POST["password"];
    echo "<br>phone -----> " . $_POST["phone"];
}

?>


</body>
</html>