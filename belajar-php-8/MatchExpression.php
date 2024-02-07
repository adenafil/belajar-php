<?php

# Jika menggunakan Switch Case

$value = "A";

$result = "";

switch ($value)
{
    case "A":
    case "B":
    case "C":
        $result = "Anda Lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Sepertinya Anda Salah Jurusan";
        break;
    default:
        $result = "Nilai Apa Itu ?";
}

echo $result . PHP_EOL;

# Jika menggunakan Match Expression
$result = "";

$result = match ($value)
{
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya anda salah jurusan",
    default => "Nilai apa itu"
};

echo "$result\n";

# Match Expression Non Equals

$nilai = 80;

$result = match (true)
{
    $nilai >= 80 => "A",
    $nilai >= 70 => "B",
    $nilai >= 60 => "C",
    $nilai >= 50 => "D",
    default => "E"
};

echo "Nilai $result\n";

$name = "Mr. Ade";

$result = match (true)
{
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Yo sup"
};

echo $result . PHP_EOL;