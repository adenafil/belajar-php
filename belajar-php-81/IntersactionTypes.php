<?php

interface HasBrand
{
    function getBrand(): string;
}

interface HasName
{
    function getName(): string;
}

class Car implements HasBrand, HasName
{
    private string $brand, $name;

    public function __construct(string $brand, string $name)
    {
        $this->brand = $brand;
        $this->name = $name;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

function printBrandAndName(HasBrand & HasName $value)
{
    echo $value->getBrand() . "-" . $value->getName() . PHP_EOL;
}

printBrandAndName(new Car("Toyota", "Avanza"));


// union

class Brand implements HasBrand {

    function getBrand(): string
    {
        return "Xiaomi";
    }
}

class Name implements HasName
{

    function getName(): string
    {
        return "Ade Nafil Firmansah";
    }
}

function union(HasBrand | HasName $value)
{
    if ($value instanceof HasName) {
        echo $value->getName() . PHP_EOL;
    }

     if ($value instanceof HasBrand) {
        echo $value->getBrand() . PHP_EOL;
    }
}

union(new Name());
union(new Brand());