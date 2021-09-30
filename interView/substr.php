<?php

// substr() function returns a part of the string based on the starting point and length.
// Length parameter is optional for this function and if it is omitted then the remaining
// part of the string from the starting point will be returned.

$sampleString = "the quick brown fox jumps over the lazy dong the quick brown fox jumps over the lazy dong";

// unlike java, there the length named paramter is the length, means how many characters will be returned
// if the length paramters is not put, then rest of the string from start, is returned
echo substr($sampleString, 20, 5);
echo "\n";

// if the next lengh parameter is missing
echo substr($sampleString, 10);

