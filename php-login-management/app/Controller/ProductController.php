<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller;

class ProductController
{
    function cetagories(string $productId, string $cetagoriyId): void
    {
        echo "PRODUCT $productId, CETAGORY $cetagoriyId";
    }
}