<?php


function getGenap(int $max)
{
    $array = [];
    for ($i = 1; $i <= $max; $i++)
    {
        if ($i % 2 == 0)
        {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

function getGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++)
    {
        if ($i % 2 == 1)
        {
            yield $i;
        }
    }
}

foreach(getGenap(100) as $value)
{
    echo "Genap => $value\n";
}

$ganjil = getGanjil(100);

foreach ($ganjil as $iseng => $value)
{
    echo "Ganjil $iseng => $value\n";
}