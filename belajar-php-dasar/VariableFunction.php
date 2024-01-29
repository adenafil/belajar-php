<?php

$hello = function($name)
{
    echo "Hello dek $name";
};

$hello("ade");

#variable funcrion

function say($name) {
    echo "Hello dek $name";
}

$sayHelloWithName = "say";

$sayHelloWithName("nafil");

# Penggunaan Variable Function
echo "\n";
function sayHello(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName\n";
}

sayHello("ade", "strtoupper");
sayHello("nafil", "strtolower");