<?php

# is_string() -> apakah tipe data string 
var_dump(is_string("ade nafil firmansah"));
#is_bool() -> apakah tipe data bool atau tidak
var_dump(is_bool(false));
#is_int() -> apakah tipe data integer
var_dump(is_int(123));
#is_float -> apakah tipe data number floating point
var_dump(is_float(1.234));
#is_array -> apakah tipe data array
var_dump(is_array([1, 2, 3, 4]));

echo "======\n";

$data = 100;

var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_string($data));
var_dump(is_null($data));
