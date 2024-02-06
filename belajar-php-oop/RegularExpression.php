<?php

$matches = [];
$result = (bool) preg_match_all(
    "/ade|fil|ansah/i",
    "Ade Nafil Firmansah",
    $matches
);

var_dump($result);
var_dump($matches);

# Regular Expression Replace
$words = "dasar lu anjing, bangsat";
$replaceResult = preg_replace(
    "/anjing|bangsat/i",
    "***-",
    $words
);

var_dump($replaceResult);

# Regular Expression Split
$splitResult = preg_split(
    "/[\s,-]/",
    "Ade Nafil Firmansah Programmer,Zaman-Now"
);

var_dump($splitResult);