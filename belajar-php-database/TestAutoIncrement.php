<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$sql = "insert into comments(email, comment) values('adetest@test.com', 'hi')";
$connection->exec($sql);
$id = $connection->lastInsertId();

var_dump($id);

$connection = null;