<?php

function sayHello(string $name = "Boboiboy")
{
    echo "Hello $name\n";
}

sayHello("ade");
sayHello("Nafil");
sayHello();

# Type declaration

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total\n";
}

sum("100", "100");
sum(100, 100);
sum(true, false);

# Variable-length Argument List
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value)
    {
        $total += $value;
    }
    echo "Total " . implode(" + ",$values) . " = $total\n";
}

sumAll(10, 20, 30, 40);
sumAll(...[10, 20, 30, 40]);
