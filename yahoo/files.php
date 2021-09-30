<?php

// we will learn about files in php
if (isset($_FILES["image"])) {
    // showing the detial of the file, if the file is uploaded
    echo "<pre>";
    print_r($_FILES["image"]);
    echo "</pre><hr>";

    // here are the file description that we have uploaded
    // store these information into variables to use them further
    $file_name = $_FILES["image"]["name"];
    $file_type = $_FILES["image"]["type"];
    $file_tmp_name = $_FILES["image"]["tmp_name"];
    $file_error = $_FILES["image"]["error"];
    $file_size = $_FILES["image"]["size"];

    // we now use a funciton named as , move uploaded file, to store that file into somewhere in the server
    // first parameter is the file name, any file name
    // $file_name is the real file name, which is in the client compter
    // $file_tmp_name is the temporary (randomly generated) file name and the name of actual filename is written with the file
    // if we want to change the file name, we can change the 2nd paramter with the $file_tmp_name
    // $file_tmep_name is randoly generated, and it is unique every time we uplaod the file, to avoid file name conflicts
    // the actual file name is for use to easily read it
    // thie line of move uplaoded file is directly for uploading the file, not in the conditions
    // move_uploaded_file($file_tmp_name, "upload-images/" . $file_name);
    // echo "<br><u>file ($file_name) uploaded successfully</u>";

    // this function returns the boolean, true if uploaded, false otherwise
    // this is the right way to use the function
    // the first parameter should be the $tempName, that php assigned to a file, php determines the filename,
    // we wont give the actual name of the file in the 1st parameter, but the php given name
    // and "upload-images/" is the directory where file are uploaded, and to save the name, we concatenate it with
    // the actual file name with dot .
    if (move_uploaded_file($file_tmp_name, "upload-images/" . $file_name)) {
        echo "<br>file uploaded successfully";
    } else {
        echo "<br>error while file uploading";
    }

    // we perform a check, that this big file cannot be uploaded, just for testing
    if ($file_size > 100000) {
        echo "<br>" . $file_name . " cannot be uploaded";
        echo "<br>try to upload a file smaller than " . 100000 . " KBs";
    }

    // for testing purpose, restrctions for file types, only these type of files are uploaded
    if ($file_type == ".jpeg" || $file_type == ".png" || $file_type == ".docx") {
        echo "_______________________________________________";
    } else {
        echo "<br>the only files accepted are jpeg, png, docx";
    }

}    // end of if(isset[$_FILES[""]]){}

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

        form {
            background-color: wheat;
            border: 1px solid dodgerblue;
            box-shadow: 5px 10px 15px #000;
            padding: 20px;
            width: 500px;
            margin: 20px auto;
        }

        input {
            padding: 5px 5px;
            margin: 5px 5px;
        }

    </style>

</head>
<body>

<!-- upload image markup with one input + and input submit -->
<form action="files.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image"><br>
    <input type="submit" name="submit">
</form>


</body>
</html>