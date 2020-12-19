<?php

// echo always returns a string so for example if we will
// try to echo the boolean true, we will get '1' back

echo 'Hello, world!'; // prints: 'Hello, world!'
echo true; // prints: '1'

// a better way to print values to the console is using var_dump()

var_dump(true); // prints: bool(true)
var_dump('string'); // prints: string(6) 'string'
var_dump(100); // prints: int(100)
