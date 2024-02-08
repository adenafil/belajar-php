<?php

$name = "ade nafil firmansah";

#string contains function
var_dump(str_contains($name, "ade"));
var_dump(str_contains($name, "nafil"));

#string starts with function
var_dump(str_starts_with($name, "a"));
var_dump(str_starts_with($name, "h"));

#string end with function
var_dump(str_ends_with($name, "h"));
var_dump(str_ends_with($name, "a"));