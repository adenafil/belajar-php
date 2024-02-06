<?php

class Student
{
    public string $id;
    public string $name;
    var int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function getSample(): string
    {
        return $this->sample;
    }

    public function __clone(): void
    {
        unset($this->sample);
    }
}