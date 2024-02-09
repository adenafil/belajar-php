<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO(
        "mysql:host=$host:$port;dbname=$database",
        $username,
        $password,
    );
    echo "Sukses terkoneksi ke database\n";

//    $connection = null;

} catch (PDOException $exception) {
    echo "Error terkoneksi ke database : {$exception->getMessage()}\n";
} finally {
    //Menutup koneksi
    $check = (bool) $connection != null;

    if ($check) echo "Koneksi akan tertutup\n";
    else echo "koneksi sudah tertutup\n";

    $connection = null;

    $check = (bool) $connection != null;

    if ($check) echo "Koneksi akan tertutup\n";
    else echo "koneksi sudah tertutup\n";

}

echo $connection;

