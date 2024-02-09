<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = $connection->quote("admin'; #");
$password = $connection->quote("admin");

$sql = "select * from admin where username = $username AND password = $password;";

echo $sql . PHP_EOL;

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row)
{
    $success = true;
    $find_user = $row["username"];
}

if ($success)
{
    echo "Sukses login : $find_user\n";
} else {
    echo  "Gagal login\n";
}

$connection = null;