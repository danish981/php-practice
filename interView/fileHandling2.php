<?php

// path to the file or the file is in the same director with the extension
$actualFile = "file.txt";

// getting the content of the file in a variable
// ignore other parameters, don't bother them
$fileContent = file_get_contents($actualFile);

// phpstorm does not auto-complete the files that are going to be used in the file handling
$anotherFileContent = file_get_contents("file2.txt");

// putting the content of both the files together and store in the first file
// or put the content of second file in first file

// removing everything from a file
// https://stackoverflow.com/questions/1073609/clearing-content-of-text-file-using-php
file_put_contents("file2.txt", "");
// removed everything from a file

// the content of the both files
$mixedFileContent = $fileContent . $anotherFileContent;

// putting the content of the both files to the third file
file_put_contents("resultingText.txt", $mixedFileContent);

// if we hover over, or ctrl+Q on the variable, it gives the type of the variable
// if the ctrl+P in the function parameters section, we see the paramters in the functions in tiny line bar
$thirdFileData = file_get_contents("resultingText.txt");












