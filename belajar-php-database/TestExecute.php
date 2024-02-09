<?php

require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$sql = <<<SQL
    insert into customers(id, name, email)
    values ("nafil", "Nafil", "nafil@test.com");
SQL;

$connection->exec($sql);

$connection = null;
