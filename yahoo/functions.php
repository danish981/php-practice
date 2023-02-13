<?php
/**
 * Created by PhpStorm.
 * User: Developers
 * Date: 03-Aug-20
 * Time: 9:25 PM
 */

//declare(strict_types = 1);      //strictly bind the types of the functions, variables,

echo "<h3>we will learn how <span>functions</span> will be used </h3>";

//function definition, function declaration
//function without return type or parameters
function test_function() {
    echo "<br>I am a function";
}

//calling of function several times
test_function();
test_function();
test_function();
test_function();
test_function();
test_function();
test_function();

echo "<br>----------------------------------------------------<br>";

echo "<h3>we will learn about functions with parameters</h3>";

function get_sum($a, $b) {
    echo "<br>number 1: $a";
    echo "<br>number 2: $b";
    echo "<br>the sum : " . ($a + $b);       //will show the sum of the numbers, not return the sum
}

//type parametric functions
function get_int_sum(int $a, int $b) {
    echo "<br>number 1 : $a";
    echo "<br>number 2 : $b";
    echo "<br> the sum : " . ($a + $b);
    echo "<br>----------------------------------------";
}

function multiply_values($a, $b) {
    echo "<br>the result of multiplication of $a and $b is ";
    echo $a * $b;
}

multiply_values(5, 7.3);

echo "<br>";
get_sum(45, 15);

echo "<br>";
get_sum(44.5, 3.5);

echo "<br>";
get_sum(49, -5);

echo "<p>parametric functions, int type parameters calling, like function(int \$a, int \$b) {} </p>";
get_int_sum(4, 6);  //only int type values can be passed to this function
get_int_sum(45, 16);  //only int type values can be passed to this function
get_int_sum(9, 6);  //only int type values can be passed to this function
get_int_sum(2, 8);  //only int type values can be passed to this function

echo "<h3>functions default argument values </h3>";

function print_something($value = "something") {
    echo "<br>function default value is " . $value;
    echo "<br>if we call the function without the parameter, the default parameter will be used";
    echo "<br>---------------------------------<br>";
}

//calling default parametric functions

print_something();  //calling the parametric function without the parameters
print_something("problem");
print_something(45);        //we did not specify the type of the argument

echo "<h3>now we will write the function with default parameters with type specified like int \$values = \"something\" </h3>";
//write your code here

function do_something(string $value = "google chrome") {
    echo "<br> the type of variable is " . var_dump($value);
    echo "<br>the default windows browser is " . $value;
}

function another_function(int $value = 5) {
    echo "<br> the passing value to the function is " . var_dump($value);
    echo "<br> the value $value + $value = $value = $value <br>";
}

do_something("opera gx");
do_something(); //method call without parameters
do_something(45);       //this method is called, i think it will be converted into string, yes, 45 is converted into string

another_function(435);      //sending int parameter
another_function();     //without value, the functions is called
//another_function("something");      //this line causing an error
another_function(45.234);       //the argument is converted into int
another_function(0.234234234);      //converted into int
another_function(9999.999);

echo "<br>-----------------------------------------------------------------------------<br>";
echo "<h2>now we will write the function with the return types </h2>";

function add_values($a, $b) {
    return $a + $b;     //sending the values to where it is called
}

function multiply_nums($i, $j, $k) {
    return $i * $k * $j;
}

function merge_values(string $one = "thomas", string $two = "clone") {
    $another_string = $one . $two;
    return $another_string;
}

function do_something_else(int $min, int $max): int {
    return rand($min, $max);
}

$variable_1 = 5;
$variable_2 = 6;
$variable_3 = 7;

echo "<br>the sum of $variable_1 and $variable_2 is " . add_values($variable_1, $variable_2);
echo "<br>the product of $variable_2 and $variable_1 and $variable_3 is " . multiply_nums($variable_2, $variable_1, $variable_2);
echo "<br>function is called and " . merge_values("burhan", "wani");

echo "<br>=================================================================================<br>";

echo "<h3>pass by value and pass by reference</h3>";

//php code in like C++ and C, it has pointers, and has pointer address using & operator, "ampersand sign"
function pass_by_value_function(int $value = 5) {
    $value = abs($value);   //returns the absolute value
    return rand($value, $value + 50);
}

$variable_4 = 45;

echo "<br>the function get_value(\$value){} called --> " . pass_by_value_function($variable_1);
echo "<br>the function get_value(\$value){} called --> " . pass_by_value_function($variable_3);
echo "<br>the function get_value(\$value){} called --> " . pass_by_value_function($variable_1);
echo "<br>the function get_value(\$value){} called --> " . pass_by_value_function($variable_2);
echo "<br>the function get_value(\$value){} called --> " . pass_by_value_function($variable_4);

//the values of the variables are passed to the function, names get_value()
//but the value of that specific variable is not changed outside of the function

function pass_by_reference(&$a) {
    $another_variable = rand(10, 20);
    $a = $another_variable;
    echo "<br>the value of \$a is $another_variable ";
}

$ref_variable_1 = 33;
$ref_variable_2 = 13;
$ref_variable_3 = 34;
$ref_variable_4 = 89;

echo "<br><br>THE values BEFORE CALLING THE FUNCTION";
echo "<br> the value of \$ref_variable_1 is $ref_variable_1";
echo "<br> the value of \$ref_variable_2 is $ref_variable_2";
echo "<br> the value of \$ref_variable_3 is $ref_variable_3";
echo "<br> the value of \$ref_variable_4 is $ref_variable_4";

echo "<br><br>CALLING THE <span>pass_by_reference(&\$a){}</span>";
pass_by_reference($ref_variable_1); //calling the functions
pass_by_reference($ref_variable_2);
pass_by_reference($ref_variable_3);
pass_by_reference($ref_variable_4);

echo "<br>THE VALUES of the variables AFTER CALLING THE FUNCTION";
echo "<br> the value of \$ref_variable_1 is $ref_variable_1";
echo "<br> the value of \$ref_variable_2 is $ref_variable_2";
echo "<br> the value of \$ref_variable_3 is $ref_variable_3";
echo "<br> the value of \$ref_variable_4 is $ref_variable_4";

//if the address of the variable is sent to the function, and it is changed inside the function,
//then outside, the value of the function gets changed

echo "<br><h2>now we will see how <span>functions with return types</span> work [strict types enables = 1]</h2>";

function get_product(float $variable1, float $variable2): float {
    return $variable1 * $variable2;
}

function get_addition_sum(int $value_1, int $value_2): int {
    return $value_1 + $value_2;
}

echo "<br>the function get_product(float value, float value): float {} is called " . get_product(2, 6);
echo "<br>the function get_addition_sum(int value, int value): int {} is called " . get_addition_sum(9, 7);

$random_variable1 = rand(10, 20);
$random_variable2 = rand(20, 30);

echo "<br>the sum is " . get_addition_sum($random_variable1, $random_variable2);
echo "<br>the sum is " . get_addition_sum($random_variable1, $random_variable2);
echo "<br>the sum is " . get_addition_sum($random_variable1, $random_variable2);
echo "<br>the sum is " . get_addition_sum($random_variable1, $random_variable2);

function get_some_value(string $user): string {
    return "some value + $user";
}

//assigning values by references

function get_random_values() {
    return rand(34, 43);
}

function get_random_value(int $min, int $max): int {
    return rand($min, $max);
}

get_some_value("something");
echo "<br>here is the random value " . get_random_value(20, 30);

?>

<link rel="stylesheet" href="style.css">






















