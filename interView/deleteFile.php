<?php

// the function, unlink is used the delete a file

// if we run the script, then the file file will be deleted
// file auto-completes does not work in these functions, in phpstorm 2017.1.2
// unlink("fileDelete.txt");

$filename = "fileDelete.txt";
$sampleContent = file_get_contents("file.txt");

if (!file_exists($filename)) {
    // if file does not exists, create the file for w = writing, a for appending
    // if we remove these two lines, then the we will see error, "no such file exists"
    fopen("fileDelete.txt", "w");
    file_put_contents("fileDelete.txt", $sampleContent);
    // echo "file " . basename("deleteTxt.txt") . " created";
}

// this function returns true or false on the file deletion
if (unlink("fileDelete.txt")) {
    echo "file " . $filename . " deleted successfully\n";
} else {
    echo "file " . $filename . " is not deleted\n";
}

