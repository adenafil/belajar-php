<?php

require_once "./data/Product.php";

$product = new Product("Xiaomi", 100);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("dummy", 1000);
echo $dummy->info();