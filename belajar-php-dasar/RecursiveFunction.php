<?php

# Factorial loop

$factorialLoop = function(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) $total *= $i;
    return $total;
};

var_dump($factorialLoop(6));

# Factoria Recursive

$factorialRecursive = function(int $value) use (&$factorialRecursive): int
{
    if ($value === 1) return 1;

    return $value * $factorialRecursive($value-1);
};

function a(int $value): int
{
    if ($value === 1) return 1;

    return $value * a($value-1);
}

var_dump(a(6));
var_dump($factorialRecursive(6));

