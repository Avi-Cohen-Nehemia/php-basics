<?php

// echo always returns a string so for example if we will
// try to echo the boolean true, we will get '1' back
echo 'Hello, world!';               // prints: 'Hello, world!'
echo true;                          // prints: '1'

// a better way to print values to the console is using var_dump()
var_dump(true);                     // prints: bool(true)
var_dump('string');                 // prints: string(6) 'string'
var_dump(100);                      // prints: int(100)

// we refer to variables in PHP using the $ sign
$animal = 'wombat';

// in PHP we can interpolate only when using double quotes
$name = 'Avi';
var_dump("Hello {$name}!");         // prints: string(10) "Hello Avi!"
var_dump('Hello {$name}!');         // prints: string(14) "Hello {$name}!"

// in order for us to use concatenation we use . (not + like in JS)
$firstName = 'Avi';
$lastName = ' Cohen-Nehemia';
var_dump($firstName . $lastName);   // prints: string(17) "Avi Cohen-Nehemia"

// like in JS, all the falsy values in PHP are the same. The only difference
// between the 2 is that empty arrays in PHP are also considered falsy
var_dump(!![]);                     // prints: bool(false)
