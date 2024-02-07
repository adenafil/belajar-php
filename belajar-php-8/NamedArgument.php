<?php

function sayHello(string $first, string $last, string $middle = ""): void
{
    echo "Hello $first $middle $last\n";
}

# Without named argument
sayHello("Ade", "Nafil", "Firmansah");
//sayHello("ade", "firmansah");

# with named argument
sayHello(last: "Firmansah", first: "ade", middle: "nafil");
sayHello(first: "ade", last: "firmansah");