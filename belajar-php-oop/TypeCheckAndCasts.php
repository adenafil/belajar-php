<?php

require_once "./data/Programmer.php";

function sayHello(Programmer $programmer): void
{
    if ($programmer instanceof BackendProgrammer)
    {
        echo "Hello Backend Programmer $programmer->name\n";
    }
    else if ($programmer instanceof FrontendProgrammer)
    {
        echo "Hello Frontend Programmer $programmer->name\n";
    }
    else if ($programmer instanceof Programmer)
    {
        echo "Hello Programmer $programmer->name\n";
    }
}

sayHello(new Programmer("ade"));
sayHello(new BackendProgrammer("ade"));
sayHello(new FrontendProgrammer("ade"));
