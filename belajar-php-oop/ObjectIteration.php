<?php

class Data implements IteratorAggregate
{
    var string $first = "first";
    public string $second = "second";
    private string $third = "third";
    protected string $fourth = "fourth";

    // public function getIterator(): Traversable
    // {
    //     return new ArrayIterator([
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth
    //     ]);
    // }

    // another way but in a same way

    public function getIterator(): Traversable
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "fourth" => $this->fourth
        ];
        
        $iterator = new ArrayIterator($array);

        return $iterator;
    }
}

$data = new Data();

foreach ($data as $property => $value)
{
    echo "$property : $value\n";
}

// $data->getIterator();
