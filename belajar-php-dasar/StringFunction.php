<?php

// Join / implode => Menggabungkan array menjadi string

$names = ["ade", "nafil", "firmansah"];
$result = join(" ", $names);
var_dump($result);
var_dump(implode(" ", $names));

// explode() => Memecah string menjadi array
$fullName = "Ade Nafil Firmansah";
var_dump(explode(" ", $fullName));

//strtolower dan strtoupper => mengecilkan huruf dan mengkapitalkanya
var_dump(strtolower($fullName));
var_dump(strtoupper($fullName));

//substr() => Mengambil sebagian string
var_dump(substr($fullName, -9, 1));

//trim() => Menghapus whitspace di depan belakang 
var_dump(trim("   ade    ", " "));