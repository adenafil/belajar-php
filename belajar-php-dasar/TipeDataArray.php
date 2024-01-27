<?php

$values = array(1, 2, 3, 4, 4.5);
var_dump($values);

$names = ["ade", "nafil", 'firmansah', 20];
var_dump($names);

# Operasi array 

echo "Mengakses data array\n";
echo $names[0];
echo "Mengubah data di array pada nomor index dengan value baru\n";
echo $names[0] = "adee";
var_dump($names[0]);
echo "\nMenambah data di array pada posisi paling belakang";
$names[] = "Masa iya";
var_dump($names);
echo "Menghapus data di array, index otomatis hilang dari array";
unset($names[4]);
var_dump($names);
echo "Menghitung total data di array\n";
var_dump(count($names));
echo count($names);

# fitur map array di php

$ade = array(
    "id" => "3012210002",
    "name" => "Ade Nafil Firmansah",
    "age" => 20
);

var_dump($ade);
var_dump($ade["id"]);

$budi = [
    "id" => 123,
    "name" => "Budi Santoso",
    "age" => 99,
    "address" => [
        "city" => "Madura",
        "country" => "Indonesia"
    ]
];

var_dump($budi);
var_dump($budi["address"]["city"]);
