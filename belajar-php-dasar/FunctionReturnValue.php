<?php

function sum(int $first, int $second):int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total = sum(20, 20);
var_dump($total);

function getFinalValue(int $value):string
{
    if ($value >= 80) return "A";
    if ($value >= 70) return "B";
    if ($value >= 60) return "C";
    if ($value >= 50) return "D";
    return "E";
}

var_dump(getFinalValue(90));
var_dump(getFinalValue(80));
var_dump(getFinalValue(70));
var_dump(getFinalValue(60));
var_dump(getFinalValue(40));