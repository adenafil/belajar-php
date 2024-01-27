<?php

$name = "Ade";
$name = null;
$age = null;

echo $name;
echo $age;


echo "is Name null ?";
var_dump(is_null($name));

echo "\n";


$contoh = "ade";
unset($contoh);

$contoh = null;

var_dump(isset($contoh));
echo $contoh;