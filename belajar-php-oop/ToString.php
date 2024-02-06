<?php

require_once "./data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "ade";
$student1->value = 1;

echo $student1 . PHP_EOL;
echo (string) $student1 . PHP_EOL;