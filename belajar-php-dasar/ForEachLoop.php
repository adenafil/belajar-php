<?php

$names = ["Ade", "Nafil", "Firmansah"];

$variable = [
    "first_name" => "ade",
    "middle_name" => "nafil",
    "last_name" => "firmansah"
];

foreach ($variable as $key => $value) {
    echo "$key => $value \n";
}

foreach ($names as $name) {
    echo "$name "; 
}
echo "\n";

foreach ($names as $key => $name) {
    echo "index ke $key = $name\n"; 
}

echo "\n";

foreach ($variable as $key => $value) :
    echo "$key => $value \n";
endforeach;