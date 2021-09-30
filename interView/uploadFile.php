<?php

// TODO: this code contains errors and warning while uploading the file

// this function is used to upload a file to a certain folder directory or path
// move_uploaded_file();

// and the array $_FILES[][] is used

// "uploadedFIle" is the file input field name in the html
// the "tmp_name" is built-in php associative array index

if (isset($_FILES["uploadFile"]["tmp_name"])) {
    if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], "uploads/")) {
        echo "the file " . basename($_FILES["uploadFile"]["name"]) . " is uploaded successfully";
    } else {
        echo "error uploadinng the php file";
    }
}

// if we run the script without the isset(), then the error will come mentioning that "uploadedFile" index does not exist

?>

<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload file</title>
    <style>
        body {
            font-family: "JetBrains Mono", sans-serif;
            background-color: wheat;
            padding: 20px;
            margin: 20px;
        }

        form {
            width: 80%;
            margin: 0 auto;
            padding: 10px;
        }

        form input {
            width: 100%;
            margin: 0 auto;
            padding: 10px;
            cursor: pointer;
            border: 1px solid yellow;
            font-weight: 500;
            letter-spacing: 1px;
            box-shadow: 4px 10px 12px gray;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: lightblue;
            color: #000;
            font-size: 20px;
            font-weight: bolder;
        }

    </style>
</head>
<body>

<!-- form to upload the file -->
<!-- if no action file is written here, then the current file (php script) will handle this form -->
<!-- enctype=multipart/form-data is necessray for uploading the file -->
<form action="uploadFile.php" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadFile" id="uploadFile" placeholder="upload file..." required><br>
    <input type="submit" name="upload" value="submit">
</form>

</body>
</html>