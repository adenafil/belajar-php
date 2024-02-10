<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "select * from customers";
$statement = $connection->query($sql);
$customers = $statement->fetchAll();

var_dump($customers);

foreach ($customers as $customer)
{
    echo "id : {$customer["id"]}\n";
    echo "name : {$customer["name"]}\n";
    echo "email : {$customer["email"]}\n";
}

//var_dump($statement);
//foreach ($statement as $one)
//{
//    echo "id : {$one["id"]}\n";
//    echo "name : {$one["name"]}\n";
//    echo "email : {$one["email"]}\n";
//}