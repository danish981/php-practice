<?php

$sampleString = "i love programming php";

// makes are an array or each word in the string
$resultString = explode(" ", $sampleString);
print_r($resultString);

$stringArray = ["the", "quick", "fox", "jumps", "over", "the", "lazy", "dog"];
// makes the string by combining all the array elements
$anotherResultString = implode(" ", $stringArray);
echo $anotherResultString;

