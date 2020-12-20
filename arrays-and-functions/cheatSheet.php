<?php

declare(strict_types=1);

// simple function example in php
// in php we can declare the types of the arguments we pass to a function
// we can pass 'int' 'float' 'string' 'bool' 'array' and 'callable' (for functions).
// we need to write this line 'declare(strict_types=1);' at the top of our file
// in order to make argument types be fully functional
function add(int $x, int $y) {
    return $x . $y;
};
var_dump(add(2, 2));

// we can store a function in a variable like so and end it with ;
// when we call a function that is stored in a variable we need to use $
$multiply = function ($x, $y) {
    return $x * $y;
}; 
var_dump($multiply(2, 3));
