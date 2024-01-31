<?php

/**
 * 
 * Di PHP, kita bisa membuat variable dimanapun yang kita mau
 * 
 * Scope variable adalah dibagian mana saja sebuah variable bisa diakses
 * 
 * PHP memiliki tiga jenis variable scope
 * -Global
 * -Local
 * -Static
 */

 /**
  * GLOBAL SCOPE :
  *
  * Variable yang dibuat di luar function memiliki scope global
  * Variable di scope global hanya bisa diakses dari luar function
  * Artinya di dalam function, kita tidak bisa mengakses variable di global
  * scope
  */

//   Kode Variable Global Scope

/*

$name = "Ade"; // It is called an global scope

function sayName()
{
    echo $name; // Error
}

sayName();

*/

// LOCAL SCOPE

/**
 * Varibale yang dibuat di dalam function memiliki scope local
 * Variable di scope local hanya bisa diakses dari dalam function itu sendiri
 * Artinya variable tersebut tidak bisa diakses dari luar function atupun dari function lain
 */

 // Kode : Variable Local Scope

 /*
 function createName()
 {
    $name = "Ade"; // Local Scope
 }

 createName();
 echo $name; // Error

*/

// Global Keyword

/**
 * Namun jika kita ingin mengakses variable diluar function (Global scope) dari dalam function, kita bisa menggunakan kata kunci global
 * Dengan menggunakan kata kunci global, Maka kita bisa akses variable yang ada di global scope dari dalam function
 */

 $name = "Ade";

 function sayName()
 {
    global $name;
    echo "Hello $name\n";
    echo $GLOBALS["name"] . "\n"; // ARRAY GLOBALS
    /**
     * Secara otomatis setiap pembuatan var global
     * php akan menyimpanya ke dalam array yang bernama
     * GLOBALS
     */
 }

 sayName();

//  STATIC SCOPE

/**
 * - Secara default local variable itu siklus hidupnya hanya sebatas functionya di eksekusi
 * Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
 * PHP memiliki scope yang bernama static
 * Static scope hanya bisa di set ke local variable
 * Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
 * Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
 */

//  Kode static scope

function increment()
{
    static $counter = 1; // static scope

    echo "Counter : $counter\n";

    $counter++;
}

increment();
increment();
increment();
