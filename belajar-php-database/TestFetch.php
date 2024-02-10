<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

if ($row = $prepareStatement->fetch())
{
    var_dump($row == true);
    var_dump($row);
    echo "Sukses login : {$row["username"]}\n";
} else {
    echo "Gagal login\n";
    var_dump($row);
}
$connection = null;
