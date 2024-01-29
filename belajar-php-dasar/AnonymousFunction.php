<?php

$sayHello = function (String $name)
{
    echo "Hello $name\n";
};

$sayHello("ade");
$sayHello("nafil");

# Anonymous function sebagai argument

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName\n";
}

function sayGoodByeV1(string $na, $filter)
{
    $finalName = $filter($na);
    echo "Good Bye $finalName\n";
}

sayGoodBye("ade", function (string $name): string {
    return strtoupper($name);
});

$filterFunction = function(string $name): string {
    return strtoupper($name);
};

sayGoodByeV1("nafil", $filterFunction);

# Mengakses variable luar dengan keyword "use"

$firstName = "Ade";
$lastName = "Nafil";

$sayHelloAde = function() use ($firstName, $lastName) {
    echo "Hello $firstName $lastName";
};

$sayHelloAde("firmansah");
