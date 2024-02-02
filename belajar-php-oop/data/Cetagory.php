<?php

class Cetagory
{
    private string $name;
    private bool $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setName(string $name): void
    {
        if (trim($name) != "")
        {
            $this->name = $name;
        }
    }

    public function setExpensive(bool $expensive): void
    {
        $this->expensive = $expensive;
    }

    
}