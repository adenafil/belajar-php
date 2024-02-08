<?php

$name = "Ade";
$result = $name == "Ade" ? "Sukses" : throw new Exception("Ups");

function validate(?string $name)
{
    $result = $name ?? throw new Exception("NULL");
    echo "Hello $result\n";
}

validate("ASe");


function sayHello(?string $name)
{
    if ($name == null)
    {
        throw new Exception("Tidak boleh null");
    }

    echo "Hello $name\n";

}

/**
 * @throws Exception
 */
function sayHelloExpression(?string $name)
{
    // expression not statement
    if (throw new Exception(""))
    {
    }

    $result = $name ?? throw new Exception("Tidak boleh null");
    echo "Hello $result\n";
}

