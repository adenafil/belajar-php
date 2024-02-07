<?php

#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class NotBlank
{

}

#[Attribute(Attribute::TARGET_PROPERTY)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[Length(min: 4, max: 10)]
    #[NotBlank]
    public ?string $username;
    #[Length(min: 8, max: 10)]
    #[NotBlank]
    public ?string $password;
}

function validateLength(ReflectionProperty $property, Object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null)
        return; // Cancel Validation

    $value = $property->getValue($object);
    $attributes = $property->getAttributes(Length::class);

    foreach ($attributes as $attribute)
    {
        $length = $attribute->newInstance();
//        var_dump($attribute->getArguments());
//        var_dump($length);
//        var_dump($property->name);
//        var_dump(strlen($value) < $length->min);
        if (strlen($value) < $length->min)
        {
            throw new Exception("Property $property->name size is too short");
        }
        if (strlen($value) > $length->max)
        {
            throw new Exception("Propery $property->name size is too long");
        }
    }

}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property)
    {
        validateNotBlank($property, $object);
        validateLength($property, $object);
    }
}

function validateNotBlank(ReflectionProperty $property, object $object): void
{
    $attributes = $property->getAttributes(NotBlank::class);
    if (count($attributes) > 0)
    {
        if (!$property->isInitialized($object))
        {
            throw new Exception("Property $property->name is not initialized");
        }
        if (trim($property->getValue($object)) == null)
        {
            throw new Exception("Property $property->name is null");
        }
    }
}

$request = new LoginRequest();
$request->username = "adea";
$request->password = "adebayor";

validate($request);

/*

echo "\n\nDEBUGGIN\n";

$refClass = new ReflectionClass($request);

echo "\ngetClass reflection\n";
var_dump($refClass);

echo "\ngetPropertis reflection\n";
var_dump($refClass->getProperties());

echo "\ngetAttributes of Length reflection\n";
$propertiesRef = $refClass->getProperties();

$hitung = 1;
foreach ($propertiesRef as $i)
{
    echo $hitung++ . PHP_EOL;
    var_dump($i->getAttributes(NotBlank::class));
}

*/