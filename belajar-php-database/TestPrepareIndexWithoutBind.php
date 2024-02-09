<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "admin'; #";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($prepareStatement as $row)
{
    echo "username : " . $row["username"] . PHP_EOL;
    echo "password : " . $row["password"] . PHP_EOL;
    $success = true;
    $find_user = $row["username"];
}

if ($success)
{
    echo "Sukses login : $find_user\n";
} else
{
    echo "Gagal login\n";
}

$connection = null;