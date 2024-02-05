<?php

trait A
{
    function doA(): void
    {
        echo "a\n";
    }
    
    function doB(): void
    {
        echo "b\n";
    }
}

trait B
{
    function doA(): void
    {
        echo "A\n";
    }
    
    function doB(): void
    {
        echo "B\n";
    }
}

class Sample
{
    use A, B
    {
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new Sample();
$sample->doA();
$sample->doB();