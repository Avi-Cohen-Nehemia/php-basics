<?php

// write some code that will output the numbers 1 to 100 in the console
// unless the number is divisible by 3, in which case output "Fizz"
// or the number is divisible by 5, in which case output "Buzz"
// if the number is divisible by 3 and 5, output "FizzBuzz"
// The first lines of output should look like this:

for ($i = 1; $i <= 100; $i += 1) {

    $output = '';
    
    if ($i % 3 === 0) {
        $output .= 'Fizz';
    }

    if ($i % 5 === 0) {
        $output .= 'Buzz';
    }

    var_dump($output ? $output : $i);
}
