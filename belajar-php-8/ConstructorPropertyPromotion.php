<?php

class Product
{
//    public string $id;
//    public string $name;
//    public int $price;
//    public int $quantity;

    public function __construct(
        public string $id,
        public string $name,
        public int $price,
        public int $quantity,
        private bool $expensive = false
        )
    {
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function getId(): string
    {
        return $this->id;
    }
}

$product = new Product("1", "barang", 10, 10);
var_dump($product);
foreach ($product as $property => $value)
{
    echo "$property : $value\n";
}
echo $product->getId();

echo $product->isExpensive() == false;