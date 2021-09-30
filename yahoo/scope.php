<?php

$global_variable = 34;

function do_somethint() {
    $local_variable = 12;
}

//accessing local variabel from outside of the function
echo "value " . $local_variable;    //error, undefined variable

//now trying to access the global variable inside the function
function access() {
    echo "global variable value is " . $global_variable;    // occured, undefined variable
}

access();

echo "<br>but there are rules to access these variables in scopes";

//lets see, what they are actually
//accessing global variable form insdie the functions

//defining some variables for testing
$variable_1 = 23;
$variable_2 = 78;
$variable_3 = 100;

//functions for testing
function get_access() {
    //we write global keyword before the variable name,
    global $variable_1;        //now we can access this variable inside this function, not another function
    echo "<br>value of \$variable_1 is " . $variable_1;
}

function get_access_1() {
    //tring to access the global variable, that was made global in another function,
    echo "<br>\$variable_1 : " . $variable_1;        //undefined variable,error occured
}

function all_global_access() {
    //making all variables global inside this function, to work on
    global $variable_1;
    global $variable_2;
    global $variable_3;

    //we can write all the variables in single line
    global $variable_1, $variable_2, $variable_3;
    $variable_3 = $variable_1 + $variable_2;
    echo "<br> the sum of $variable_1 and $variable_2 is " . $variable_3;
}

get_access();        //calling the function, in which we used the global keyword
get_access_1();

all_global_access();
echo "<br>now accessing the variables value from outside of the funcitons ";
echo "<br>value " . $variable_1;
echo "<br>another value " . $variable_2;
echo "<br>third value " . $variable_3;


//if value of global variable is changed form inside the funciton, the value if changed from outside of the function too


	











