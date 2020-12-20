<?php

declare(strict_types=1);

// simple function example in php
// in php we can declare the types of the arguments we pass to a function
// we can pass 'int' 'float' 'string' 'bool' 'array' and 'callable' (for functions).
// we need to write this line 'declare(strict_types=1);' at the top of our file
// in order to make argument types be fully functional
// we can also declare the type of the expected returned value using ': type'
// we can declare that a function does not return anything by passing ': void'
function add(float $x, float $y) : float {
    return $x + $y;
};
var_dump(add(2, 2));

// we can store a function in a variable like so and end it with ;
// when we call a function that is stored in a variable we need to use $
$multiply = function (float $x, float $y) {
    return $x * $y;
}; 
var_dump($multiply(2, 3));

// simple array example in php
$arr = [1, 2, 3, 4, 5];
var_dump($arr[2]);

// unlike in JS, in php we need to use 'count' to get the total number of items in an array
var_dump(count($arr));

// unlike in JS, php does not have something similar to arr.push(value)
// instead, we push values like so:
$arr[] = 'wombat'; 
var_dump($arr[5]);

// php does not have objects so in order to store key pair values we use associative arrays
// in order to access a value we will use square bracket notation
$assoc = [
    'name' => 'Avi',
    'age' => 30
];
var_dump($assoc['age']);

// we can add another key value pair to an exiting associative array like so:
$assoc['nationality'] = 'Israeli';
var_dump($assoc['nationality']);
