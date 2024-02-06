<?php

class Student
{
    public string $id;
    public string $name;
    var int $value;
    private string $sample;

    public function __debugInfo(): ?array
    {
        return [
          "id" => $this->id,
          "name" => $this->name,
          "value" => $this->value,
          "author" => "Ade Nafil Firmansah"
        ];
    }

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke Student with arguments $join\n";
    }

    public function __toString(): string
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

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