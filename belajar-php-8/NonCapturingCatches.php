<?php

function validate(string $name): void
{
    if (trim($name) == "") {
        throw new Exception("Invalid Name");
    }
}

try {
    validate("   ");
} catch (Exception) {
    echo "Invalid Name\n";
}
