<?php


trait SampleTrait
{
    public abstract function sampleFunction(): ?string;
}

class SampleFunction
{
    use SampleTrait;

    public function sampleFunction(): ?string
    {
        return null;
    }
}