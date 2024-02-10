<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();
$connection->beginTransaction();

$connection->exec("insert into comments(email, comment) values('ade@test.com', 'hi')");
$connection->exec("insert into comments(email, comment) values('ade@test.com', 'hi lagi')");
$connection->exec("insert into comments(email, comment) values('ade@test.com', 'hi lagi')");


$connection->commit();
$connection = null;