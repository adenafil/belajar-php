<?php

$first = [
    "first_name" => "Ade"
];

$last = [
    "last_name" => "Firmansah"
];

$full = $first + $last;

var_dump($full);

var_dump(["ade", "bayor"] + ["mama", "", "masa sih"]);

# Operator Perbandingan array

var_dump([
    "first_name" => "ade",
    "last_name" => "firmansah"
] 
== 
[
    "last_name" => "firmansah",
    "first_name" => "ade"
]
);

var_dump([
    "first_name" => "ade",
    "last_name" => "firmansah"
] 
=== 
[
    "last_name" => "firmansah",
    "first_name" => "ade"
]
);

var_dump([
    "first_name" => "ade",
    "last_name" => "firmansah"
] 
!=
[
    "last_name" => "firmansah",
    "first_name" => "ade"
]
);


var_dump([
    "first_name" => "ade",
    "last_name" => "firmansah"
] 
!==
[
    "last_name" => "firmansah",
    "first_name" => "ade"
]
);



