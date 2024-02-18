<?php

namespace ProgrammerZamanNow\Test;

class ProductService
{
    public function __construct(private ProductRepository $repository)
    {}

    public function register(product $product): product
    {
        if ($this->repository->findById($product->getId()) != null)
        {
            throw new \Exception("Product already exists");
        }
        return $this->repository->save($product);
    }
}
