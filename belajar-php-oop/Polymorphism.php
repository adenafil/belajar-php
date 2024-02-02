<?php

require_once "./data/Programmer.php";

$company = new Company();

$company->programmer = new Programmer("ade");
var_dump($company);

$company->programmer = new BackendProgrammer("ade");
var_dump($company);

$company->programmer = new FrontendProgrammer("ade");
var_dump($company);

function sayHelloProgrammer(Programmer $programmer): void
{
    echo "Hello $programmer->name\n";
}

sayHelloProgrammer(new Programmer("Ade"));
sayHelloProgrammer(new BackendProgrammer("Ade"));
sayHelloProgrammer(new FrontendProgrammer("Ade"));