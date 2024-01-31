<?php

// Apa itu Reference ?

/**
 * Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
 * Reference di php tidak sama dengan reference di bahasa pemrograman seperti C/C++ yang memiliki fitur pointer
 * Analogi Reference itu seperti file, jika variable adalah file, dan valuenya adalah isi file nya, maka reference adalah membuat shortcut (di windows) atau as (di linux/mac) terhadap file yang sama
 * Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinyapun berubah
 * Untuk membuat reference terhadap variable, kita bisa menggunakan karakter &
 */

//  Assign By Reference 

/**
 * Pertama, PHP Reference bisa memungkikann kita bisa membuat beberapa variable menuju ke value yang sama
 */

//  Kode : Assign By Reference

$name = "Ade";
$otherName = &$name;
$otherName = "Firmansah";

echo $name . PHP_EOL;
echo $otherName . PHP_EOL;

// Pass By Reference

/**
 * Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
 */

//  Kode : Pass By Reference

function increment(int &$value)
{
    $value++;
}

$counter = 1;
$a = &$counter;
increment($counter);
increment($counter);
echo $a . PHP_EOL;

echo $counter . PHP_EOL;

// Kode : Returning References

/**
 * PHP juga bisa mengembalikan reference pada function
 * Namun hati-hati, gunakan fitur ini jika memang ada alasanya, karena fitur ini bisa membingungkan
 */

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;