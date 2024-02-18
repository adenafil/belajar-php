<?php

namespace ProgrammerZamanNow\Test;
Interface ProductRepository
{
    function save(product $product): product;
    function delete(): void;
    function findById(): ?Product;
    function findAll(): Array;
}
