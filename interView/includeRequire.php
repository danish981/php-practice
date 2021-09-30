<?php

// if we use include, php script runs even the script has the error

// this entire file code is included in the current file
// if the script has error, the script even too
include("readFile.php");

// require, if we use require, and if the script has the error, then the script will stop executing and terminate the code
// and display the error message, and ask the programmer to remove the error first, otherwise the script will run smoothly,
// if there are no error
require("DbConnection.php");







