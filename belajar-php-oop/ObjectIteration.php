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

    // public function getIterator(): Traversable
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourth" => $this->fourth
    //     ];
        
    //     $iterator = new ArrayIterator($array);

    //     return $iterator;
    // }

    public function getIterator(): Traversable
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield "third" => $this->third;
        yield "fourth" => $this->fourth;
    }
}

$data = new Data();

foreach ($data as $property => $value)
{
    echo "$property : $value\n";
}

// $data->getIterator();
