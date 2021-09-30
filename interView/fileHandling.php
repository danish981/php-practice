<?php

// reading file content
$file = "file.txt";

// getting the content in the variable as text
$content = file_get_contents($file);

// lets replace something like "text" to txt
$content = str_replace("text", "txt", $content);

// now write it back to the original file, after replacing the content like "text" to "txt"
file_put_contents($file, $content);



// on every line , there was "text" and that is replaced by "txt"












