<?php

require_once "./data/LoginRequest.php";
require_once "./exception/ValidationException.php";

class ValidationUtil
{

    /**
     * @throws ValidationException
     */
    static function validate(LoginRequest $loginRequest): void
    {
        if (!isset($loginRequest->username))
        {
            throw new ValidationException("username is not set");
        }
        elseif (!isset($loginRequest->password))
        {
            throw new ValidationException("passsword is not set");
        }elseif (is_null($loginRequest->password))
        {
            throw new ValidationException("passsword is null");
        }elseif (is_null($loginRequest->password))
        {
            throw new ValidationException("passsword is null");
        }
    }

    # Menggunakan validation reflection

    static function validationReflection($request): void
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property)
        {
            if (!$property->isInitialized($request))
            {
                throw new ValidationException("$property->name is not set");
            }
            else if (is_null($property->getValue($request)))
            {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}
