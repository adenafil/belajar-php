<?php

# Menggabungkan string atau tipe data lain ke string

$name = "Ade Nafil Firmansah";

echo "Nama : " . $name . PHP_EOL;
echo "Nilai " . 100 . "\n";

# Konversi Ke Number Dan Sebaliknya

$valueString = (string) 100;
var_dump($valueString);

$valueString = (int) "100";
var_dump($valueString);

$valueString = (float) "100.11";
var_dump($valueString);

# Mengakses Karakter

$name = "Ade";
echo $name[0] . "\n";
echo $name[1] . "\n";
echo $name[2] . "\n";

# Variable Parsing

echo "Hello $name, selamat belajar \n";
echo <<<ADE
Hello $name, Selamat Belajar Lagi \n
ADE;

# Curly Brace in var
echo "Hello {$name}s, selamat belajar \n";