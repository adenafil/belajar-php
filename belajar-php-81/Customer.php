<?php

interface SayHello
{
    function sayHello(): string;
}

trait IndonesiaGender
{
    function inIndonesia(): string
    {
        return match ($this) {
            Gender::Male => "Tuan",
            Gender::Female => "Nyonya",
        };
    }
}

enum Gender: string implements SayHello {
    use IndonesiaGender;
    case Male = "Mr";
    case Female = "Mrs";
    const Unknown = "Unknown";

    function sayHello(): string
    {
        return "Hello " . $this->value;
    }

    static function fromIndonesia(string $value): Gender
    {
        return match ($value) {
            "Tuan" => Gender::Male,
            "Nyonya" => Gender::Female,
            default => throw new Exception("Unsupported Indonesian Value")
        };
    }
}

class Customer {
/*    public string $id;
    public string $name;
    public Gender $gender;*/

//    public function __construct(string $id, string $name, Gender $gender)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->gender = $gender;
//    }

    public function __construct(
        public string $id,
        public string $name,
        public Gender $gender
    )
    {
    }
}

//function sayHello(Customer $customer): string
//{
//    if ($customer->gender == Gender::Male)
//    {
//        return "Hello Mr. {$customer->name}";
//    } else if ($customer->gender == Gender::Female)
//    {
//        return "Hello Mrs. {$customer->name}";
//    } else {
//        return "Hello {$customer->name}";
//    }
//}

function sayHello(Customer $customer): string
{
     if ($customer->gender == null) {
        return "Hello {$customer->name}";
    } else {
         return "Hello {$customer->gender->value}. $customer->name";
     }
}



var_dump(sayHello(new Customer("1", "ade", Gender::Male)));
var_dump(
    sayHello(new Customer("2", "nafil", Gender::Male))
);
var_dump(
    sayHello(new Customer("3", "suzume", Gender::Female))
);

var_dump(Gender::cases());

var_dump(Gender::tryFrom("Mr"));
var_dump(Gender::Male->sayHello());
var_dump(Gender::Male->inIndonesia());

var_dump(Gender::fromIndonesia("Tuan"));
var_dump(Gender::fromIndonesia("Nyonya"));
//var_dump(Gender::fromIndonesia("Salah")); error

var_dump(Gender::Unknown);