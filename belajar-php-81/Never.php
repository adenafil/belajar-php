<?php

function stop(): never
{
    echo "STOP" . PHP_EOL;
    die();
}

stop();

echo "Ups\n";