<?php

class Zero
{
    private array $properties = [];

    public function __get(string $name)
    {
//        echo "Access Property $name\n";
        return $this->properties[$name];
//        return "CONTOH";
    }

    public function __set(string $name, $value): void
    {
//        echo "Set property $name with value $value\n";
        $this->properties[$name] = $value;
    }

    public function __isset(string $name): bool
    {
//        echo "Isset $name\n";
        return isset($this->properties[$name]);
    }

    public function __unset(string $name): void
    {
//        echo "Unset $name\n";
        unset($this->properties[$name]);
    }

    public function __call(string $name, array $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with arguments $join\n";
    }

    public static function __callStatic(string $name, array $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static function $name with arguments $join\n";
    }
}

$zero = new Zero();
$zero->firstName = "ade";
$zero->middleName = "nafil";
$zero->lastName = "firmansah";

echo "First Name : " . $zero->firstName . PHP_EOL;
echo "Middle Name : " . $zero->middleName . PHP_EOL;
echo "Last Name : " . $zero->lastName . PHP_EOL;

var_dump($zero);

$zero->sayAde("ade", "firmansah");
Zero::sayAde("ade", "firmansah");
