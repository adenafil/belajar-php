<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName\n";
}

sayHello("ade", function ($name) :string {return strtoupper($name);});
sayHello("ade", fn($name) :string => strtoupper($name));
sayHello("ade", "strtoupper");
sayHello("Ade", "strtolower");