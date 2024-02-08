<?php


function testMixed(mixed $data): mixed
{
    if (is_array($data)) return [];
    if (is_string($data)) return "String";
    if (is_int($data)) return 1;
    if (is_bool($data)) return false;
    else return null;
}

var_dump(testMixed([]));
var_dump(testMixed("ade"));
var_dump(testMixed(1));
var_dump(testMixed(true));
var_dump(testMixed(new stdClass()));