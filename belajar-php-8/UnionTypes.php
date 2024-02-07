<?php

class Example
{
    public string | int | bool | array $data;
}

$example = new Example();

$example->data = "ade";
echo $example->data . PHP_EOL;

$example->data = 1;
echo $example->data . PHP_EOL;

$example->data = true;
echo $example->data . PHP_EOL;

$example->data = ["ade", "nafil", "firmansah"];
var_dump($example->data);

function sampleFunction(string | array $data): string | array
{
    if (is_string($data))
    {
        return $data;
    }
    elseif (is_array($data))
    {
        return ["adearray"];
    }
}

var_dump(sampleFunction("ade"));
var_dump(sampleFunction(["ade"]));