<?php

require_once "./exception/ValidationException.php";
require_once "./data/LoginRequest.php";

/**
 * @throws ValidationException
 * @throws Exception
 */
function validateLoginRequest(LoginRequest $loginRequest): void
{
    if (!isset($loginRequest->username))
    {
        throw new ValidationException("Username is null\n");
    }
    else if (!isset($loginRequest->password))
    {
        throw new ValidationException("Password is null\n");
    }
    else if (trim($loginRequest->username) == "")
    {
        throw new Exception("Username is blank\n");
    }
    else if (trim($loginRequest->password) == "")
    {
        throw new Exception("Password is blank\b");
    }
}