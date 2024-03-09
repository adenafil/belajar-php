<?php

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Customer.php';

class Product
{
    public function __construct(public string $name = "Anonymous",
                                public Category $category = new Category("0", "Default Category"))
    {
    }
}

$product = new Product();

var_dump($product);

function sayHelloNew(Customer $customer = new Customer("0", "Anonymous", Gender::Male))
{
    return $customer;
}

var_dump(
    sayHelloNew()
);