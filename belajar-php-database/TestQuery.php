<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = "select id, name, email from customers";
$statement = $connection->query($sql);

//foreach ($statement as $row)
//{
//    var_dump($row);
//}

foreach ($statement as $row)
{
    echo "id : {$row["id"]}\n";
    echo "name : {$row["name"]}\n";
    echo "email : {$row["email"]}\n\n";
}


$connection = null;