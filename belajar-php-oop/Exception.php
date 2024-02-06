<?php

require_once "./helper/Validation.php";
require_once "./exception/ValidationException.php";
require_once  "./data/LoginRequest.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "valid";
//$loginRequest->password = "valid";

//try {
//    validateLoginRequest($loginRequest);
//
//} catch (ValidationException $exception)
//{
//    echo "Validation Error : {$exception->getMessage()}\n";
//} catch (Exception $e)
//{
//    echo "Error : {$e->getMessage()}";
//}

try {
    validateLoginRequest($loginRequest);
    echo "VALID\n";
} catch (ValidationException | Exception $exception)
{
    echo "Error : {$exception->getMessage()}";

    echo "Error in : {$exception->getTraceAsString()}\n";

    var_dump($exception->getTrace());
} finally {
    echo "Error gk error tetap dieksekusi\n";
}