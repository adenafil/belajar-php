<?php

# array_keys() -> Mengambil semua keys milik array
var_dump(array_keys(
    [
        "first_name" => "ade",
        "middle_name" => "nafil",
        "last_name" => "firmansah"
    ]
));

# array_values() => Mengambil semua values milik array
var_dump(array_values(
    [
        "first_name" => "ade",
        "middle_name" => "nafil",
        "last_name" => "firmansah"
    ]
));

# array_map() => Mengubah semua data array dengan callback

$a = [1, 2, 3, 4, 5];
var_dump(array_map(fn(int $n): int => ($n * $n * $n), $a));

# array rsort => Mengurutkan array terbalik
rsort($a);
var_dump($a);

# array_sort() => Mengurutkan sebuah array
sort($a);
var_dump($a);

# shuffle() => Mengubah data array secara random
shuffle($a);
var_dump($a);

# studi kasus pada vidio pak eko

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn($data) => $data * 2, $data));

rsort($data);
var_dump($data);

var_dump(array_keys($data));
var_dump(array_values($data));