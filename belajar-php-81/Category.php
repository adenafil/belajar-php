<?php

//class Category
//{
//    public readonly string $name;
//    public readonly string $id;
//
//    public function __construct(string $id, string $name)
//    {
//        $this->name = $name;
//        $this->id = $id;
//    }
//
//}

class Category
{
    public function __construct(public readonly string $id, public readonly string $name)
    {
    }

}


$category = new Category("1", "Xiaomi");
var_dump($category->name);