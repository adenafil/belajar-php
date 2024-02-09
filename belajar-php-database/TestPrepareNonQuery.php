<?php
//
//require_once __DIR__ . "/GetConnection.php";
//
//$connection = getConnection();
//
//$username = "budi";
//$password = "rahasia";
//
//$sql = "insert into admin(username, password) values(:username, :password)";
//$prepareStatement = $connection->prepare($sql);
//$prepareStatement->bindParam("username", $username);
//$prepareStatement->bindParam("password", $password);
//$prepareStatement->execute();
//
//
//$connection = null;


//require_once __DIR__ . "/GetConnection.php";
//
//$connection = getConnection();
//
//$username = "adi";
//$password = "rahasia";
//
//$sql = "insert into admin(username, password) values(?, ?)";
//$prepareStatement = $connection->prepare($sql);
//$prepareStatement->bindParam(1, $username);
//$prepareStatement->bindParam(2, $password);
//$prepareStatement->execute();
//
//
//$connection = null;
//


//
//require_once __DIR__ . "/GetConnection.php";
//
//$connection = getConnection();
//
//$username = "budi";
//$password = "rahasia";
//
//$sql = "insert into admin(username, password) values(:username, :password)";
//$prepareStatement = $connection->prepare($sql);
//$prepareStatement->bindParam("username", $username);
//$prepareStatement->bindParam("password", $password);
//$prepareStatement->execute();
//
//
//$connection = null;


require_once __DIR__ . "/GetConnection.php";

$connection = getConnection();

$username = "roy";
$password = "rahasia";

$sql = "insert into admin(username, password) values(?, ?)";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);


$connection = null;

