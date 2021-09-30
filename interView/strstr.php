<?php

// strstr() returns the next part of the string from the searched string,
// first paramter, the string in which other string has to be searched
// second paramter, string to be searched
// third parameter, (optional), if true, then previous part of the first occurent of searched string is returned

$string = "the quick brown fox jumps over the lazy dog";

// returns the next part of the string from "brown"
echo strstr($string, "brown");

echo "\n";

// returns the previos part of the string before "over"
echo strstr($string, "over", true);







