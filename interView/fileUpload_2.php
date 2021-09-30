<?php

// get current path of the running php script, because the uploads folder is here
$uploadPath = __DIR__ . "\\uploads\\";

// error handling code is not written

// if upload button is pressed
if (isset($_POST["upload"])) {
    $tempFile = $_FILES["fileUpload"]["tmp_name"];
    $actualFile = $_FILES["fileUpload"]["name"];
    move_uploaded_file($tempFile, $uploadPath . $actualFile);
    echo "file " . basename($actualFile) . " uploaded successfully";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file</title>
</head>
<body>

<!-- upload file -->
<form action="fileUpload_2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload" placeholder="upload file ..." required>
    <input type="submit" name="upload" value="upload file">
</form>

</body>
</html>