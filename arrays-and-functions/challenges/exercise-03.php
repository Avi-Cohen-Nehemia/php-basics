<?php

declare(strict_types=1);

// Update sameName to return true if the associative arrays have the same name property and false if they have different names.

function sameName ($person1, $person2) {
    return $person1['name'] === $person2['name'];
};

$a = [ "name" => "Alice", "age" => 52 ];
$b = [ "name" => "Bob", "age" => 34 ];
$c = [ "name" => "Charlie", "age" => 24 ];
$d = [ "name" => "Bob", "age" => 97 ];

var_dump(sameName($a, $b)); // false
var_dump(sameName($b, $c)); // false
var_dump(sameName($c, $d)); // false
var_dump(sameName($b, $d)); // true
