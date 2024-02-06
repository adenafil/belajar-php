<?php

require_once "./data/Student.php";

$student1 = new Student();
$student1->id = "003";
$student1->name = "ade";
$student1->value = 505;
$student1->setSample("XXX");

var_dump($student1);

$student2 = clone $student1;
$student2->name = "nafil";

var_dump($student2);

