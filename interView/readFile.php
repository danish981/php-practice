<?php

// https://www.w3schools.com/php/php_file.asp
readfile("file.txt");

// read file is used only when you have to read the content of the file
// if the file is successfully read, or not error occurred, the TRUE is returned, otherwise false

$file = "dictionary.txt";
$myfile = fopen($file, "r") or die("unable to open the file");











