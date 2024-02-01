<?php

namespace Data;

class Shape
{
    function getCorner(): int
    {
        return 0;
    }
}

class Rectange extends Shape
{
    public function getCorner(): int
    {
        return 4;
    }

    public function getParentCorner(): int
    {
        // it is like super
        return parent::getCorner();
    }
}